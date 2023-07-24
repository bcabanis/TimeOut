<?php

namespace App\Form;

use App\Document\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LoginFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // Ajoute le champ "email" avec le type EmailType
        $builder->add('email', EmailType::class, [
            'label' => 'Adresse mail',
        ]);

        // Ajoute le champ "password" avec le type PasswordType
        $builder->add('password', PasswordType::class, [
            'label' => 'Mot de passe',
        ]);

        // Ajoute le champ "stayConnected" avec le type CheckboxType
        $builder->add('stayConnected', CheckboxType::class, [
            'label' => 'Rester connecté',
            'mapped' => false, // Indique que ce champ n'est pas lié à une propriété de l'entité Users
        ]);

        // Ajoute le champ "submit" avec le type SubmitType
        $builder->add('submit', SubmitType::class, [
            'label' => 'Se connecter',
            'attr' => [
                'class' => 'inputsub btninscrire btn-valide colorWhite',
                'onclick' => "window.location.href='{{ path('app_profil') }}'"
            ]
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        // Définit la classe des données utilisées par le formulaire
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
