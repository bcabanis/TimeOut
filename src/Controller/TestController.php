<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Service\CallApiService;
use stdClass;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(CallApiService $callApiService, UserRepository $userRepository, Request $request): Response
    {


        dd($callApiService->getDataByTags("musique"));

        $dataTags = $callApiService->getDataByTags("musique");



        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);



        // if(isset($_POST)){
        //     $data = file_get_contents("php://input");
        //     $idEvent = json_decode($data, true);
        //     dump($idEvent);
        //     // do whatever we want with the users array.
        //     for ($i=0; $i < count($dataApi['records']); $i++) {
        //         if ($dataApi['records'][$i]["recordid"] == $idEvent["idEvent"]) {
        //             dump($dataApi['records'][$i]["fields"]['location_name']); 
        //         }
        //     }
        // }

    }
}
