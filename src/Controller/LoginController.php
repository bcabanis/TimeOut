<?php

namespace App\Controller;

use MongoDB\Client;
use App\Document\Users;
use App\Form\LoginFormType;
use App\Form\PhotoFormType;
use App\Form\ProfilFormType;
use App\Repository\UserRepository;
use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


#[Route('/login')]
class LoginController extends AbstractController
{
    #[Route('/', name: 'app_login')]
    public function login(Request $request, ManagerRegistry $managerRegistry, AuthenticationUtils $authenticationUtils, UserRepository $userRepository, SessionInterface $sessionInterface): Response
    {
        // Récupère les erreurs d'authentification
        $error = $authenticationUtils->getLastAuthenticationError();
        // Récupère le dernier nom d'utilisateur utilisé
        $lastUsername = $authenticationUtils->getLastUsername();

        // Crée une nouvelle instance de l'entité Users
        $user = new Users();
        // Pré-remplit le champ d'e-mail avec le dernier nom d'utilisateur utilisé
        $user->setEmail($lastUsername);

        // Crée le formulaire de connexion en utilisant LoginFormType et l'entité Users
        $form = $this->createForm(LoginFormType::class, $user);

        // Gère la soumission du formulaire
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupère l'utilisateur correspondant à l'adresse e-mail fournie depuis la base de données
            $userRepository = $managerRegistry->getRepository(Users::class);
            $authenticatedUser = $userRepository->findOneBy(['email' => $user->getEmail()]);

            if (!$authenticatedUser) {
                // Si aucun utilisateur n'est trouvé on affiche un message d'erreur
                throw new CustomUserMessageAuthenticationException('Adresse e-mail incorrecte.');
            }

            // Compare si le mot de passe fourni correspond au mot de passe de l'utilisateur
            if (password_verify($user->getPassword(), $authenticatedUser->password)) {

                // Vérifie si l'utilisateur a déjà rempli les informations de profil
                if ($authenticatedUser->hasFilledProfile()) {

                    // Redirige vers le dashboard
                    return new RedirectResponse($this->generateUrl('app_dashboard'));
                }

                // Stocke l'e-mail de l'utilisateur connecté dans la session
                $sessionInterface->set('email', $user->getEmail());
            }

            // Redirige vers la page profil
            return $this->redirectToRoute('app_profil');
        }

        return $this->render('login/index.html.twig', [
            'loginForm' => $form->createView(),
            'error' => $error,
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(SessionInterface $sessionInterface): Response
    {
        // Supprime les données de la session
        $sessionInterface->clear();

        // Redirige vers la page de connexion
        return $this->redirectToRoute('app_login');
    }

    // Redirection vers la personnalisation du profil
    #[Route('/profil', name: 'app_profil')]
    public function profil(Request $request, UserRepository $userRepository, SessionInterface $session): Response
    {
        // Récupérer l'email de l'utilisateur connecté depuis la session
        $email = $session->get('email');

        // Récupérer l'utilisateur depuis la base de données en utilisant l'email
        $user = $userRepository->findOneBy(['email' => $email]);

        // Créer le formulaire de profil en utilisant ProfilFormType et l'utilisateur récupéré
        $form = $this->createForm(ProfilFormType::class, $user);

        // Gérer la soumission du formulaire
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Enregistrer les modifications de l'utilisateur dans la base de données
            $userRepository->save($user);

            // Rediriger l'utilisateur vers une autre page (par exemple, le dashboard)
            return $this->redirectToRoute('app_login_avatar');
        }

        return $this->render('login/profil.html.twig', [
            'profilForm' => $form->createView(),
        ]);
    }

    // #[Route('/loginavatar', name: 'app_login_avatar')]
    // public function avatar(Request $request): Response
    // {
    //     // Créer le formulaire
    //     $form = $this->createForm(PhotoFormType::class);
    
    //     // Gérer la soumission du formulaire
    //     $form->handleRequest($request);
        
    //     if ($form->isSubmitted() && $form->isValid()) {
    //         // Récupérer le fichier téléchargé
    //         $photoFile = $form->get('photo')->getData();
            
    //         // Vérifier si un fichier a été téléchargé
    //         if ($photoFile) {
    //             // Déplacer le fichier vers le répertoire d'upload
    //             $uploadDir = $this->getParameter('photos_upload_directory');
    //             $fileName = md5(uniqid()) . '.' . $photoFile->guessExtension();
                
    //             try {
    //                 $photoFile->move($uploadDir, $fileName);
    //             } catch (\Exception $e) {
    //                 // Gérer les erreurs éventuelles liées au téléchargement
    //                 $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de la photo.');
    //                 return $this->redirectToRoute('app_login_avatar');
    //             }
                
    //             // Enregistrer le nom du fichier dans la base de données
    //             $this->savePhotoToDatabase($fileName);
                
    //             // Rediriger ou afficher un message de succès
    //             $this->addFlash('success', 'La photo a été téléchargée avec succès !');
    //             return $this->redirectToRoute('app_login_avatar');
    //         }
    //     }
    
    //     return $this->render('login/avatar.html.twig', [
    //         'photoForm' => $form->createView(),
    //     ]);
    // }
    
    // // Function to save the photo filename to the MongoDB database
    // private function savePhotoToDatabase(string $fileName): void
    // {
    //     // Replace 'your_connection_string' with the actual connection string to your MongoDB server
    //     $mongoClient = new Client('mongodb+srv://gettogetherpasserelle:notion23@cluster0.vvlyofu.mongodb.net/get-together?retryWrites=true&w=majority');
    //     $database = $mongoClient->selectDatabase('GetTogether');
    //     $collection = $database->selectCollection('Users');
    
    //     // Store the filename in the 'photos' field in the collection
    //     $collection->insertOne(['photos' => $fileName]);
    // }

    // Redirection vers le choix des tags
    #[Route('/tags', name: 'app_tags')]
    public function tags(Request $request, UserRepository $userRepository, SessionInterface $session): Response
    {
        // Récupérer l'email de l'utilisateur connecté depuis la session
        $email = $session->get('email');

        // Récupérer l'utilisateur depuis la base de données en utilisant l'email
        $user = $userRepository->findOneBy(['email' => $email]);

        // marque le user comme rempli
        $user->fill();

        // Enregistrer les modifications de l'utilisateur dans la base de données
        $userRepository->save($user);

        return $this->render('login/tags.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }
}
