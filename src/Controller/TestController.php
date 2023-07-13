<?php

namespace App\Controller;

use App\Service\CallApiService;
use stdClass;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(CallApiService $callApiService): Response
    {

        // dd($callApiService->getEventData());
        $data = $callApiService->getEventData();

        $newData = new stdClass();
        $newData->location_name = $data['records'];

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

        dump($data['records'][0]["datasetid"]);

        return $this->render('test/index.html.twig',[
            'data' => $data,
        ]);
    }
}
