<?php


namespace App\Domain\Explorer\Services;


use App\Domain\Explorer\Factories\DelegatesCollectionFactory;
use App\Infrastructure\ExternalData\ArkClientService;
use App\Infrastructure\ExternalData\Requests\DelegatesRequestCommand;

class RetrieveDelegatesService
{
    /** @var ArkClientService */
    private $arkClientService;

    /** @var DelegatesCollectionFactory */
    private $delegatesFactory;

    function __construct(ArkClientService $arkClientService, DelegatesCollectionFactory $delegatesFactory)
    {
        $this->arkClientService = $arkClientService;
        $this->delegatesFactory = $delegatesFactory;
    }

    public function execute(DelegatesRequestCommand $request)
    {
        $delegatesPayload = $this->arkClientService->handleRequest($request);

        return $this->delegatesFactory->buildCollection($delegatesPayload);
    }
}
