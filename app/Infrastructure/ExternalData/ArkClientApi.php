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

    function listBlocks(string $action): array
    {
        $response = $this->httpClient->get($action);
        return json_decode($response->getBody(), true);
    }
}
