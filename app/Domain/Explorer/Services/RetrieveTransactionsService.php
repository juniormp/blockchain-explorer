<?php


namespace App\Domain\Explorer\Services;


use App\Domain\Explorer\Factories\TransactionsCollectionFactory;
use App\Infrastructure\ExternalData\ArkClientService;
use App\Infrastructure\ExternalData\Requests\OperationRequest;

class RetrieveTransactionsService
{
    /** @var ArkClientService */
    private $arkClientService;

    /** @var TransactionsCollectionFactory */
    private $transactionsFactory;

    function __construct(ArkClientService $arkClientService, TransactionsCollectionFactory $transactionsFactory) {
        $this->arkClientService = $arkClientService;
        $this->transactionsFactory = $transactionsFactory;
    }

    public function execute(OperationRequest $request) {
        $transactionsPayload = $this->arkClientService->handleRequest($request);

        if ($this->isCollection($transactionsPayload)) {
            return $this->transactionsFactory->buildCollection($transactionsPayload);
        } else {
            return $this->transactionsFactory->createTransaction($transactionsPayload['data']);
        }
    }

    private function isCollection(array $transactionsPayload): bool {
        return (count($transactionsPayload) > 1) ? true : false;
    }
}
