<?php

namespace App\Controller;

use Exception;
use App\Entity\Images;
use App\Entity\Gallerie;
use App\Form\FileUploadType;
use App\Form\ProfilTypeForm;
use App\Form\UserTypeProfil;
use App\Service\FileUploader;
use App\Repository\GallerieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfilController extends AbstractController
{


 // ...
    /**
   * @Route("/profil/", name="app_profil")
   */
   public function modifierImage(Request $request,FileUploader $file_uploader,EntityManagerInterface $em){
    $user = $this->get('security.token_storage')->getToken()->getUser();
 

    $form = $this->createForm(UserTypeProfil::class);
    $form->handleRequest($request);
    $form2 = $this->createForm(ProfilTypeForm::class);
    $form2->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) 
    {
          $em->persist($user);
          $em->flush();
          $user = $this->getUser();
          return $this->render('profil/index.html.twig', [
           'controller_name' => 'UploadController',
           'form' => $form->createView(),
           'form2' => $form2->createView()
          ]);
   
     
    }
    if ($form2->isSubmitted() && $form2->isValid()) 
    {
      $file = $form2['upload_file']->getData();
      if ($file) 
      {
        $file_name = $file_uploader->upload($file);
        if (null !== $file_name) // for example
        {
          $filesystem = new Filesystem();
          if(!empty($user->getUrlImage())){
            $path=$this->getParameter("public_directory").$user->getUrlImage();
            $filesystem->remove($path);
          }
       
          $directory = $file_uploader->getTargetDirectory();
          $full_path = $directory.'/'.$file_name;
          $file_path_image = "/uploads/".$file_name;
          $user->setUrlimage($file_path_image);
          $em->persist($user);
          $em->flush();
          $user = $this->getUser();
          return $this->render('profil/index.html.twig', [
           'controller_name' => 'UploadController',
           'form' => $form->createView(),
           'form2' => $form2->createView()
       ]);
        }
        else
        {
          // Oups, an error occured !!!
          throw new Exception("Type de fichier non accepté");
        }
      }
    }
    return $this->render('profil/index.html.twig', [
      'form' => $form->createView(),
      'form2' => $form2->createView()
    ]);

 }
    // ...
    /**
   * @Route("/profil/image/supprimer", name="app_supprimer_image")
   */
    public function deleteImage(EntityManagerInterface $em,Request $request){
       $user = $this->get('security.token_storage')->getToken()->getUser();

       $filesystem = new Filesystem();
       if(!empty($user->getUrlImage())){
        $filesystem->remove($this->getParameter("public_directory").$user->getUrlImage());
        $user->setUrlimage("");
        $em->persist($user);
        $em->flush();
       }
       $form = $this->createForm(UserTypeProfil::class,$user);
       $form->handleRequest($request);
       $form2 = $this->createForm(ProfilTypeForm::class);
       $form->handleRequest($request);
       return $this->render('profil/index.html.twig', [
           'controller_name' => 'UploadController',
           'form' => $form->createView(),
           'form2' => $form2->createView()
       ]);

    }
  // ...
}

