<?php


namespace App\Infrastructure\ExternalData;


use App\Infrastructure\ExternalData\Exceptions\ArkClientApiException;
use App\Infrastructure\ExternalData\Requests\OperationRequest;
use GuzzleHttp\Exception\TransferException;

class ArkClientService
{
    /** @var ArkClientApi */
    private $arkClientApi;

    function __construct(ArkClientApi $arkClientApi) {
        $this->arkClientApi = $arkClientApi;
    }

    function handleRequest(OperationRequest $request): array
    {
        try {
            if(!$request->isMainnet()) $this->arkClientApi->setDevnet();

            $action = $request->getHttpAction();

            return $this->arkClientApi->request($action);
        } catch (TransferException $exception) {
            throw new ArkClientApiException($exception->getMessage());
        }
    }
}
