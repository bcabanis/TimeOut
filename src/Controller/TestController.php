<?php

namespace App\Controller;

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
    public function index(CallApiService $callApiService): Response
    {

        // dd($callApiService->getEventData());
        $dataApi = $callApiService->getEventData();
        // dd($dataApi);
        // dump($data['records']);


        // Assurez-vous que vous recevez une requête POST
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Récupérez les données JSON envoyées depuis JavaScript
        $jsonData = file_get_contents("php://input");
        
        // Convertissez les données JSON en tableau associatif
        $data = json_decode($jsonData, true);
        
        // Vérifiez si l'élément "idEvent" est présent dans les données
        if (isset($data["idEvent"])) {
            // Récupérez l'identifiant d'événement
            $idEvent = $data["idEvent"];
            
            // Faites ce que vous voulez avec l'identifiant d'événement, par exemple :
            // - Enregistrez-le dans une base de données
            // - Effectuez des opérations en fonction de cet identifiant
            // - Retournez des données ou des résultats à JavaScript si nécessaire
            
            // Exemple de réponse pour renvoyer un message simple à JavaScript
            $response = array("status" => "success", "message" => "Identifiant d'événement reçu : " . $idEvent);
            echo json_encode($response);
        } else {
            // Si l'élément "idEvent" n'est pas présent dans les données
            $response = array("status" => "error", "message" => "Identifiant d'événement manquant.");
            echo json_encode($response);
        }
        } else {
            // Si la requête n'est pas de type POST
            $response = array("status" => "error", "message" => "Requête non autorisée.");
            echo json_encode($response);
        }

        return $this->render('test/index.html.twig',[
            'data' => $dataApi['records'],
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

    #[Route('/participer', name: 'app_participer')]
    public function participer(){

        echo 'here';
        $request = Request::createFromGlobals();

        
        return $this->render('test/index.html.twig',[
            //'data' => $data,
        ]);
    }
}
