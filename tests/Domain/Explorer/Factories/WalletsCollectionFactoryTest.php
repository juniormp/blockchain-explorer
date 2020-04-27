<?php


namespace Tests\Domain\Explorer\Factories;


use App\Domain\Explorer\Factories\WalletsCollectionFactory;
use Tests\Support\Builders\CollectionWalletsSupportBuilder;
use Tests\Support\WalletsListMock;
use Tests\TestCase;

class WalletsCollectionFactoryTest extends TestCase
{
    public function test_it_creates_wallets_collection(){
        $factory = new WalletsCollectionFactory();
        $walletsPayload = json_decode(WalletsListMock::jsonResponse(), true);
        $expected = CollectionWalletsSupportBuilder::buildDefault();

        $response = $factory->buildCollection($walletsPayload);

        $this->assertEquals($expected, $response);
    }
}
