<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;


class ProfilTypeForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            $builder
                    ->add('upload_file', FileType::class, [
                        'label' => false,
                        'mapped' => false, // Tell that there is no Entity to link
                        'required' => true,
                        'constraints' => [
                          new File([ 
                            'mimeTypes' => [ // We want to let upload only txt, csv or Excel files
                              "image/png",
                              "image/jpg",
                              "image/jpeg",
                              "image/gif"
                            ],
                            'mimeTypesMessage' => "Mauvais type de fichier.",
                          ])
                        ],
                      ])
                      ->add('send', SubmitType::class); // We could have added it in the view, as stated in the framework recommendations
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
