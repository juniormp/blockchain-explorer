<?php


namespace App\Domain\Explorer\Services;


use App\Domain\Explorer\Factories\WalletsCollectionFactory;
use App\Infrastructure\ExternalData\ArkClientService;
use App\Infrastructure\ExternalData\Requests\WalletsRequestCommand;

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

    public function execute(WalletsRequestCommand $request)
    {
        $walletsPayload = $this->arkClientService->handleRequest($request);

        if ($this->isCollection($walletsPayload)) {
            return $this->walletsFactory->buildCollection($walletsPayload);
        } else {
            return $this->walletsFactory->createWallet($walletsPayload['data']);
        }
    }

    private function isCollection(array $transactionsPayload): bool {
        return (count($transactionsPayload) > 1) ? true : false;
    }
}
