<?php


namespace App\Domain\Explorer\Services;


use App\Domain\Explorer\Factories\WalletsCollectionFactory;
use App\Infrastructure\ExternalData\ArkClientService;
use App\Infrastructure\ExternalData\Requests\WalletsRequest;

class RetrieveWalletsService
{
    /** @var ArkClientService */
    private $arkClientService;

    /** @var WalletsCollectionFactory */
    private $walletsFactory;

    function __construct(ArkClientService $arkClientService, WalletsCollectionFactory $walletsFactory)
    {
        $this->arkClientService = $arkClientService;
        $this->walletsFactory = $walletsFactory;
    }

    public function execute(WalletsRequest $request)
    {
        $walletsPayload = $this->arkClientService->handleRequest($request);

        return $this->walletsFactory->buildCollection($walletsPayload);
    }
}
