<?php


namespace App\Domain\Explorer\Services;


use App\Domain\Explorer\Factories\CollectionsTransactionFactory;
use App\Infrastructure\ExternalData\ArkClientService;
use App\Infrastructure\ExternalData\Requests\ListTransactionsRequest;

class RetrieveTransactionsService
{
    /** @var ArkClientService */
    private $arkClientService;

    /** @var CollectionsTransactionFactory */
    private $transactionsFactory;

    /** @var ListTransactionsRequest */
    private $request;

    function __construct(ArkClientService $arkClientService, CollectionsTransactionFactory $transactionsFactory,
                         ListTransactionsRequest $request) {
        $this->arkClientService = $arkClientService;
        $this->transactionsFactory = $transactionsFactory;
        $this->request = $request;
    }

    public function execute(){
        $transactionsPayload = $this->arkClientService->handleRequest($this->request);

        return $this->transactionsFactory->buildCollection($transactionsPayload);
    }
}
