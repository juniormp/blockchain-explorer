<?php


namespace App\Infrastructure\ExternalData;

use GuzzleHttp\Client as GuzzleClient;

class ArkClientApi
{
    /** @var GuzzleClient */
    private $httpClient;

    function __construct(GuzzleClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    function request(string $action): array
    {
        $response = $this->httpClient->get($action);
        return json_decode($response->getBody(), true);
    }

    function setDevnet()
    {
        $this->httpClient = new GuzzleClient([
            'base_uri' => config('services.ark')['devnet']
        ]);
    }
}
