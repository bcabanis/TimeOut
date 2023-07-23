<?php

namespace App\Form;

use App\Document\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TagsFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // Récupère les tagsByCategory passés dans les options
        $tagsByCategory = $options['tagsByCategory'];

        // Crée le formulaire avec les tags de chaque catégorie
        foreach ($tagsByCategory as $category => $tags) {
            $builder

                // Ajoute les tags de chaque catégorie
                ->add($category, CollectionType::class, [
                    'label' => $category,
                    'entry_type' => CheckboxType::class,
                    'entry_options' => [
                        'label' => false,
                    ],
                    'choices' => array_combine($tags, $tags), // Utilisez le tableau de tags pour les clés et les valeurs
                    'data' => $options['data']->getTagsByCategory($category), // Récupère les tags sélectionnés par l'utilisateur pour cette catégorie
                ])
                
                // Ajoute le bouton "Enregistrer"
                ->add('submit', SubmitType::class, [
                    'label' => 'Enregistrer',
                ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        // Définit la classe des données utilisées par le formulaire
        $resolver->setDefaults([
            'data_class' => Users::class,
            'tagsByCategory' => [], // Option pour passer les tags par catégorie au formulaire
        ]);
    }
}
