<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3;


class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('surName', TextType::class, [
                'attr' => [
                    'class' => 'form-control text-field',

                ],
                'label' => 'Lastname / Surname',
                'label_attr' => [
                    'class' => 'form-label  mt-4'
                ]
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'form-control text-field',

                ],
                'label' => 'Email address',
                'label_attr' => [
                    'class' => 'form-label  mt-4'
                ],

            ])
            ->add('subject', TextType::class, [
                'attr' => [
                    'class' => 'form-control text-field',

                ],
                'label' => 'object of the message',
                'label_attr' => [
                    'class' => 'form-label  mt-4'
                ],

            ])
            ->add('message', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control text-field ',
                ],
                'label' => 'Message',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ],

            ])
            ->add('submit', SubmitType::class, [
                'attr' => [
                    'class' => 'btn submitMessage mt-4 spaceBetween'
                ],
                'label' => 'Submit my request'
            ]);
            
       
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}