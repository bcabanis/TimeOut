<?php

namespace App\Form;

use App\Document\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\Image;

class PhotoFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // Ajoute le champ "profilPicture" avec le type FileType
        $builder->add('profilPicture', FileType::class, [
            'label' => 'Télécharger une photo de profil', // Étiquette du champ affichée dans le formulaire
            'mapped' => false, // Indique que ce champ n'est pas lié à une propriété de l'entité Users
            'required' => true, // Indique que ce champ est obligatoire
            'constraints' => [
                // Ajoute une contrainte de validation pour le champ "profilPicture"
                new Image([
                    'maxSize' => '5M', // Taille maximale de l'image (5 Mo dans cet exemple)
                    'mimeTypes' => [
                        'image/jpeg', // Types MIME autorisés : JPEG
                        'image/png', // Types MIME autorisés : PNG
                    ],
                    'mimeTypesMessage' => 'Veuillez télécharger une image JPEG ou PNG valide.', // Message d'erreur affiché si le type MIME de l'image est invalide
                ]),
            ],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        // Définit la classe des données utilisées par le formulaire
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
