<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{

    // Redirection vers le dashboard
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(SessionInterface $sessionInterface): Response
    {
        return $this->render('dashboard/index.html.twig', [
            'user' => 'user',
        ]);
    }
}
