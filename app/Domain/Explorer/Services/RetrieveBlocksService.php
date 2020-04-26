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

    /** @var ListBlocksRequest */
    private $request;

    function __construct(ArkClientService $arkClientService, CollectionBlocksFactory $blocksFactory, ListBlocksRequest $request) {
        $this->arkClientService = $arkClientService;
        $this->blocksFactory = $blocksFactory;
        $this->request = $request;
    }

    public function execute(){
        $blocksPayload = $this->arkClientService->handleListBlocks($this->request);

        return $this->blocksFactory->buildCollection($blocksPayload);
    }
}
