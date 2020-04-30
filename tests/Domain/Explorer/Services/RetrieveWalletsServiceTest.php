<?php


namespace Tests\Domain\Explorer\Services;


use App\Domain\Explorer\Factories\WalletsCollectionFactory;
use App\Domain\Explorer\Models\CollectionsWalletDTO;
use App\Domain\Explorer\Services\RetrieveWalletsService;
use App\Infrastructure\ExternalData\ArkClientService;
use App\Infrastructure\ExternalData\Requests\WalletsRequestCommand;
use Tests\TestCase;

class RetrieveWalletsServiceTest extends TestCase
{
    public function test_it_returns_wallets_list(){
        $arkClientService = $this->createMock(ArkClientService::class);
        $walletsFactory = $this->createMock(WalletsCollectionFactory::class);
        $request = new WalletsRequestCommand();
        $walletsPayload = ["fake-payload-response", "fake-payload-response"];
        $walletCollections = $this->createMock(CollectionsWalletDTO::class);
        $service = new RetrieveWalletsService($arkClientService, $walletsFactory);

        $arkClientService->expects($this->once())->method('handleRequest')->with($request)
            ->willReturn($walletsPayload);
        $walletsFactory->expects($this->once())->method('buildCollection')->with($walletsPayload)
            ->willReturn($walletCollections);

        $response = $service->execute($request);

        $this->assertEquals($walletCollections, $response);
    }
}
