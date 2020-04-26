<?php


namespace App\Infrastructure\ExternalData;


use App\Infrastructure\ExternalData\Exceptions\ArkClientApiException;
use App\Infrastructure\ExternalData\Requests\IOperationRequest;
use App\Infrastructure\ExternalData\Requests\ListBlocksRequest;
use App\Infrastructure\ExternalData\Requests\ListTransactionsRequest;
use GuzzleHttp\Exception\TransferException;

class ArkClientService
{
    /** @var ArkClientApi */
    private $arkClientApi;

    function __construct(ArkClientApi $arkClientApi) {
        $this->arkClientApi = $arkClientApi;
    }

    function handleRequest(IOperationRequest $request): array
    {
        try {
            $action = $request::getHttpAction();
            return $this->arkClientApi->request($action);
        } catch (TransferException $exception) {
            throw new ArkClientApiException($exception->getMessage());
        }
    }
}
