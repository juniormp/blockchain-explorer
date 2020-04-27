<?php


namespace Tests\Domain\Explorer\Services;


use App\Domain\Explorer\Factories\DelegatesCollectionFactory;
use App\Domain\Explorer\Models\DelegatesCollectionDTO;
use App\Domain\Explorer\Services\RetrieveDelegatesService;
use App\Infrastructure\ExternalData\ArkClientService;
use App\Infrastructure\ExternalData\Requests\DelegatesRequest;
use Tests\TestCase;

class RetrieveDelegatesServiceTest extends TestCase
{
    public function test_it_returns_delegates_list(){
        $arkClientService = $this->createMock(ArkClientService::class);
        $delegatesFactory = $this->createMock(DelegatesCollectionFactory::class);
        $request = new DelegatesRequest();
        $delegatesPayload = ["fake-payload-response", "fake-payload-response"];
        $delegatesCollection = $this->createMock(DelegatesCollectionDTO::class);
        $service = new RetrieveDelegatesService($arkClientService, $delegatesFactory);

        $arkClientService->expects($this->once())->method('handleRequest')->with($request)
            ->willReturn($delegatesPayload);
        $delegatesFactory->expects($this->once())->method('buildCollection')->with($delegatesPayload)
            ->willReturn($delegatesCollection);

        $response = $service->execute($request);

        $this->assertEquals($delegatesCollection, $response);
    }
}
