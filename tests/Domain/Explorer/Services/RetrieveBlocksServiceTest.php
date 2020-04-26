<?php


namespace Tests\Domain\Explorer\Services;


use App\Domain\Explorer\Factories\CollectionBlocksFactory;
use App\Domain\Explorer\Models\CollectionBlocksDTO;
use App\Domain\Explorer\Services\RetrieveBlocksService;
use App\Infrastructure\ExternalData\ArkClientService;
use App\Infrastructure\ExternalData\Requests\ListBlocksRequest;
use Tests\TestCase;

class RetrieveBlocksServiceTest extends TestCase
{
    public function test_it_returns_blocks_list(){
        $arkClientService = $this->createMock(ArkClientService::class);
        $blocksFactory = $this->createMock(CollectionBlocksFactory::class);
        $request = new ListBlocksRequest();
        $blocksPayload = ["fake-payload-response"];
        $collectionBlocks = $this->createMock(CollectionBlocksDTO::class);
        $service = new RetrieveBlocksService($arkClientService, $blocksFactory, $request);

        $arkClientService->expects($this->once())->method('handleRequest')->with($request)
            ->willReturn($blocksPayload);
        $blocksFactory->expects($this->once())->method('buildCollection')->with($blocksPayload)
            ->willReturn($collectionBlocks);

        $response = $service->execute();

        $this->assertEquals($collectionBlocks, $response);
    }
}
