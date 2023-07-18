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

        // dd($callApiService->getEventData());
        $dataApi = $callApiService->getEventData();


        // Récupérer les données envoyées depuis JavaScript
        $data = json_decode($request->getContent(), true);

        // Faire quelque chose avec les données (exemple : les afficher)
        dump($data);

        // Vous pouvez également effectuer des traitements supplémentaires ici
        // et renvoyer une réponse JSON si nécessaire
        $responseData = ['status' => 'success', 'message' => 'Données traitées avec succès'];
        return new JsonResponse($responseData);

        // dd($dataApi);
        // dump($data['records']);


        // if (isset($_POST['data'])) {
        //     $receivedData = $_POST['data'];
        //     // Faites quelque chose avec $receivedData
        //     echo "PHP a reçu : " . $receivedData;
        // } else {
        //     echo "Aucune donnée reçue.";
        // }

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
