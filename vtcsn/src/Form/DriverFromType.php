<?php

namespace App\Form;

use App\Entity\Driver;
use App\Entity\Vehicule;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DriverFromType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('license',options:[
                'attr'=>[
                    
                    'class' => 'form-control',
            ]
            ])
            // ->add('vehicule',EntityType::class,[
            //     'attr'=>[
                    
            //         'class' => 'form-control',
            //     ],
            //     'class'=>Vehicule::class,
            //     'choice_label' => function ($vehicule) {
            //         return $vehicule->getLicensePlate() ;
            //     }

            // ])
            // ->add('user',EntityType::class,[
            //     'attr'=>[
                    
            //         'class' => 'form-control',
            //     ],
            //     'class'=>User::class,
            //     'choice_label' => function ($user) {
            //         return $user-> getId() ."  ".$user-> getName() . " " . $user->getSurname();
            //     }

            // ])
            // ->add('disponibility',ChoiceType::class,[
            //     'attr'=>[
                    
            //         'class' => 'form-control',
            //     ],
            //     'choices'=>[
            //         'trus'=>'trus',
            //         'false'=>'false'
            //     ]

            // ])
            
            ->add('enregistrer', SubmitType::class)
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Driver::class,
        ]);
    }
}