<?php

namespace App\Controller;


use Exception;
use App\Entity\Channel;
use App\Entity\Message;
use Psr\Link\LinkInterface;
use App\Form\ChannelFormType;
use App\Repository\UserRepository;
use Symfony\Component\WebLink\Link;
use App\Repository\ChannelRepository;
use App\Repository\MessageRepository;

use Symfony\Component\Mercure\Update;
use Doctrine\ORM\EntityManagerInterface;
use App\Services\Mercure\CookieJwtProvider;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mercure\PublisherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;


class ChatController extends AbstractController
{
    /**
     * @Route("/chat", name="chat_channel")
     */
    public function getChannels(ChannelRepository $channelRepository): Response
    {
        $channels = $channelRepository->findAll();

        return $this->render('user/channel/index.html.twig', [
            'channels' => $channels ?? []
        ]);
    }
    /**
     * @Route("/chat/{id}", name="chat")
     */
    public function chat(
        Request $request, // Autowire the request object
        Channel $channel,
        MessageRepository $messageRepository,
        CookieJwtProvider $cookieJwtProvider
    ): Response
    {
        $messages = $messageRepository->findBy([
            'channel' => $channel
        ], ['createdAt' => 'ASC']);

        $hubUrl = $this->getParameter('mercure.default_hub'); // Mercure automatically define this parameter
        $this->addLink($request, new Link('mercure', $hubUrl)); // Use the WebLink Component to add this header to the following response
        $response = $this->render('user/channel/chat.html.twig', [
            'channel' => $channel,
            'messages' => $messages
        ]);
        
        $hubUrl = $this->getParameter('mercure.default_hub'); // Mercure automatically define this parameter
        $this->addLink($request, new Link('mercure', $hubUrl)); // Use the WebLink Component to add this header to the following response

        return $this->render('user/channel/chat.html.twig', [
            'channel' => $channel,
            'messages' => $messages
        ]);
         $response->headers->setCookie(
        Cookie::create(
            'mercureAuthorization',
            $cookieJwtProvider($channel),
            new \DateTime('+1day'),
            '/.well-known/mercure'
        )
    );
    return $response;
       
    }
    /**
     * @Route("/message", name="message", methods={"POST"})
     */
    public function sendMessage(
        Request $request,
        ChannelRepository $channelRepository,
        SerializerInterface $serializer,
        UserRepository $repoUser,
        EntityManagerInterface $em,
        HubInterface $publisher): JsonResponse
    {
        $data = \json_decode($request->getContent(), true); // On récupère les data postées et on les déserialize
        if (empty($content = $data['content'])) {
            throw new AccessDeniedHttpException('No data sent');
        }
        $user = $repoUser->findOneBy([
            'username' => $data['user']
        ]);

        $channel = $channelRepository->findOneBy([
            'id' => $data['channel'] // On cherche à savoir de quel channel provient le message
        ]);
        if (!$channel) {
            throw new AccessDeniedHttpException('Message have to be sent on a specific channel');
        }

        $message = new Message(); // Après validation, on crée le nouveau message
        $message->setContent($content);
        $message->setChannel($channel);
        $message->setAuthor($user); // On lui attribue comme auteur l'utilisateur courant

        $em->persist($message);
        $em->flush(); // Sauvegarde du nouvel objet en DB

        $jsonMessage = $serializer->serialize($message, 'json', [
            'groups' => ['message'] // On serialize la réponse avant de la renvoyer
        ]);
       
      
        $update = new Update( // Création d'une nouvelle update
            sprintf('http://localhost:8000/channel/'.$channel->getId().''),
            $jsonMessage, // On y passe le message serializer en content value
        );
        $publisher->publish($update); // Le Publisher est un service invokable. On peut publier directement l'update comme cela

        return new JsonResponse(
            $jsonMessage,
            Response::HTTP_OK,
            [],
            true
        );
        
        
    }



    /**
     * @Route("/new_channel", name="app_channel_new")
     */
    public function register(Request $request): Response
    {
        $channel = new Channel();
        $form = $this->createForm(ChannelFormType::class, $channel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($channel);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $this->redirectToRoute('chat_channel');
        }

        return $this->render('user/channel/newchannel.html.twig', [
            'channelForm' => $form->createView(),
        ]);
    }
}
