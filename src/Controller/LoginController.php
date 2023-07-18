<?php

namespace App\Controller;

use App\Document\Users;
use App\Form\LoginFormType;
use App\Form\PhotoFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Config\DoctrineMongodb\DocumentManagerConfig;

#[Route('/login')]
class LoginController extends AbstractController
{
    #[Route('/', name: 'app_login')]

    public function login(Request $request): Response
    {
        // Créer une nouvelle instance de l'entité Users
        $user = new Users();

        // Créer le formulaire d'inscription en utilisant LoginFormType et l'entité Users
        $form = $this->createForm(LoginFormType::class, $user);

        // Gère la soumission du formulaire
        $form->handleRequest($request);

        return $this->render('login/index.html.twig', [
            'loginForm' => $form->createView(),
        ]);
    }

    // Redirection vers la personnalisation du profil
    #[Route('/profil', name: 'app_profil')]
    public function personnalisation(): Response
    {
        return $this->render('login/profil.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

    // Redirection vers le choix des avatars
    #[Route('/loginavatar', name: 'app_login_avatar')]
    public function avatar(Request $request): Response
    {
        // Créer le formulaire
        $form = $this->createForm(PhotoFormType::class);

        // Gérer la soumission du formulaire
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer le fichier téléchargé
            $photoFile = $form->get('photo')->getData();

            // Vérifier si un fichier a été téléchargé
            if ($photoFile) {
                // Déplacer le fichier vers le répertoire d'upload
                $uploadDir = $this->getParameter('photos_upload_directory');
                $fileName = md5(uniqid()) . '.' . $photoFile->guessExtension();

                try {
                    $photoFile->move($uploadDir, $fileName);
                } catch (\Exception $e) {
                    // Gérer les erreurs éventuelles liées au téléchargement
                    $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de la photo.');
                }

                // Enregistrer le nom du fichier dans la base de données MongoDB
                $photo = new Users();
                $photo->setProfilPicture($fileName);

                // Afficher un message de succès
                $this->addFlash('success', 'La photo a été téléchargée avec succès !');
            } else {
                // Afficher un message d'erreur si le formulaire est soumis sans photo
                $this->addFlash('error', 'Veuillez sélectionner une photo avant de soumettre le formulaire.');
            }
        }

        return $this->render('login/avatar.html.twig', [
            'photoForm' => $form->createView(),
        ]);
    }


    // Redirection vers le choix des tags
    #[Route('/tags', name: 'app_tags')]
    public function tags(): Response
    {
        return $this->render('login/tags.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }
}
