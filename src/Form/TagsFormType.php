<?php

namespace App\Form;

use App\Document\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TagsFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tags', ChoiceType::class, [
                'label' => 'Sport',
                'choices' => [
                    'Marche' => 'Marche',
                    'Cyclisme' => 'Cyclisme',
                    'Football' => 'Football',
                    'Basket' => 'Basket',
                    'Moto' => 'Moto',
                    'Tennis' => 'Tennis',
                    'Hockey' => 'Hockey',
                    'Golf' => 'Golf',
                    'Arts Martiaux' => 'Arts Martiaux',
                    'Body building' => 'Body building',
                    'Yoga' => 'Yoga',
                    'Boxe Anglaise' => 'Boxe Anglaise',
                ],
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('tags', ChoiceType::class, [
                'label' => 'Musique',
                'choices' => [
                    'Alternatif' => 'Alternatif',
                    'Blues' => 'Blues',
                    'Classique' => 'Classique',
                    'Dj/Dance' => 'Dj/Dance',
                    'Folk' => 'Folk',
                    'Hip-Hop' => 'Hip-Hop',
                    'Jazz' => 'Jazz',
                    'Opéra' => 'Opéra',
                    'Pop' => 'Pop',
                    'R&B' => 'R&B',
                    'Rap' => 'Rap',
                    'Rock' => 'Rock',
                ],
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Enregistrer'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
