<?php


namespace App\Domain\Explorer\Services;


use App\Domain\Explorer\Factories\CollectionBlocksFactory;
use App\Infrastructure\ExternalData\ArkClientService;
use App\Infrastructure\ExternalData\Requests\ListBlocksRequest;

class RetrieveBlocksService
{
    /** @var ArkClientService */
    private $arkClientService;

    /** @var CollectionBlocksFactory */
    private $blocksFactory;

    function __construct(ArkClientService $arkClientService, CollectionBlocksFactory $blocksFactory) {
        $this->arkClientService = $arkClientService;
        $this->blocksFactory = $blocksFactory;
    }

    public function execute(ListBlocksRequest $request){
        $blocksPayload = $this->arkClientService->handleRequest($request);

        if ($this->isCollection($blocksPayload)) {
            return $this->blocksFactory->buildCollection($blocksPayload);
        } else {
            return $this->blocksFactory->createBlock($blocksPayload['data']);
        }
    }

    private function isCollection(array $blocksPayload): bool {
        return (count($blocksPayload) > 1) ? true : false;
    }
}
