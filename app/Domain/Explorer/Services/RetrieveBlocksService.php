<?php


namespace App\Domain\Explorer\Services;


use App\Domain\Explorer\Factories\BlocksCollectionFactory;
use App\Infrastructure\ExternalData\ArkClientService;
use App\Infrastructure\ExternalData\Requests\BlockRequestCommand;

class RetrieveBlocksService
{
    /** @var ArkClientService */
    private $arkClientService;

    /** @var BlocksCollectionFactory */
    private $blocksFactory;

    function __construct(ArkClientService $arkClientService, BlocksCollectionFactory $blocksFactory) {
        $this->arkClientService = $arkClientService;
        $this->blocksFactory = $blocksFactory;
    }

    public function execute(BlockRequestCommand $request){
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
