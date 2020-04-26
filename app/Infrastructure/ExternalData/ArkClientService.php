<?php


namespace App\Infrastructure\ExternalData;


use App\Infrastructure\ExternalData\Exceptions\ArkClientApiException;
use App\Infrastructure\ExternalData\Requests\ListBlocksRequest;
use GuzzleHttp\Exception\TransferException;

class ArkClientService
{
    /** @var ArkClientApi */
    private $arkClientApi;

    function __construct(ArkClientApi $arkClientApi) {
        $this->arkClientApi = $arkClientApi;
    }

    function handleListBlocks(ListBlocksRequest $request): array
    {
        try {
            $action = $request::getHttpAction();
            return $this->arkClientApi->listBlocks($action);
        } catch (TransferException $exception) {
            throw new ArkClientApiException($exception->getMessage());
        }
    }
}
