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


        // $newData = new stdClass();
        // $newData->location_name = $data['records'][2]["fields"]['location_name'];
        // $newData->location_coordinates = $data['records'][2]["fields"]['location_name'];
        // $newData->begin = $data['records'][2]["fields"]['location_name'];
        // $newData->end = $data['records'][2]["fields"]['location_name'];
        // $newData->image = $data['records'][2]["fields"]['location_name'];
        // $newData->title_fr = $data['records'][2]["fields"]['location_name'];
        // $newData->keywords_fr = $data['records'][2]["fields"]['location_name'];
        // $newData->daterange_fr = $data['records'][2]["fields"]['location_name'];
        // $newData->longdescription_fr = $data['records'][2]["fields"]['location_name'];

        // $newData = {
        //     'location_name' -> json_encode($data["records"]);
        //     "location_coordinates" -> json_encode($data["records"]),
        //     "begin"
        //     "end"
        //     "image"
        //     "title_fr"
        //     "keywords_fr"
        //     "daterange_fr"
        //     "longdescription_fr"



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


//d