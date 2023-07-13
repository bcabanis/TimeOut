<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService
{

    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }


    public function getEventData(): array
    {
        $response = $this->client->request(
            'GET',
            'https://public.opendatasoft.com/api/records/1.0/search/?dataset=evenements-publics-openagenda&q=&refine.updatedat=2023&refine.keywords_fr=atelier'
        );

        return $response->toArray();
    }

}



