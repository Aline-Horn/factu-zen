<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('companyName', TextType::class,
            [
                'attr' => [
                    'placeholder' => 'Company Name',
                    'class' => 'form-control',
                ],
                'label' => 'Company Name',
                'label_attr' => [
                    'class' => 'form-label'
                ],
               
            ])
            ->add('contactName', TextType::class, [
                'attr' => [
                    'placeholder' => 'Your name',
                    'class' => 'form-control',
                ],
                'label' => 'Contact name',
                'label_attr' => [
                    'class' => 'form-label'
                ],
               
            ])
            ->add('email', TextType::class, [
                'attr' => [
                    'placeholder' => 'example@ex.fr',
                    'class' => 'form-control',
                ],
                'label' => 'Contact email',
                'label_attr' => [
                    'class' => 'form-label'
                ],
                
            ])
            ->add('phone', TextType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => '0788821232425',
                    'class' => 'form-control',
                ],
                'label' => 'Contact number',
                'label_attr' => [
                    'class' => 'form-label'
                ],
            
            ])
        ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
