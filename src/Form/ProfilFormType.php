<?php

namespace App\Form;

use App\Document\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfilFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // Ajoute le champ "Nom" avec le type TextType
        $builder->add('lastname', TextType::class, [
            'label' => 'Nom'
        ]);

        // Ajoute le champ "Prénom" avec le type TextType
        $builder->add('firstname', TextType::class, [
            'label' => 'Prénom'
        ]);

        // Ajoute le champ "Pseudo" avec le type TextType
        $builder->add('pseudo', TextType::class, [
            'label' => 'Pseudo'
        ]);

        // Ajoute le champ "Ville" avec le type TextType
        $builder->add('city', TextType::class, [
            'label' => 'Ville'
        ]);

        // Ajoute le bouton "Enregistrer" avec le type SubmitType
        $builder->add('submit', SubmitType::class, [
            'label' => 'Enregistrer'
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        // Définit les options par défaut pour le formulaire
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
