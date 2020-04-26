<?php


namespace Tests\Domain\Explorer\Factories;


use App\Domain\Explorer\Factories\CollectionBlocksFactory;
use App\Domain\Explorer\Factories\CollectionsTransactionFactory;
use Tests\Support\Builders\CollectionBlocksSupportBuilder;
use Tests\Support\Builders\CollectionTransactionSupportBuilder;
use Tests\Support\ListBlocksMock;
use Tests\Support\ListTransactionsMock;
use Tests\TestCase;

class CollectionTransactionsFactoryTest extends TestCase
{
    public function test_it_creates_collection_transaction(){
        $factory = new CollectionsTransactionFactory();
        $transactionPayload = json_decode(ListTransactionsMock::jsonResponse(), true);
        $expected = CollectionTransactionSupportBuilder::buildDefault();

        $response = $factory->buildCollection($transactionPayload);

        $this->assertEquals($expected, $response);
    }
}
