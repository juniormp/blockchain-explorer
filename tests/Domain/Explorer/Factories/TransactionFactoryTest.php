<?php


namespace Tests\Domain\Explorer\Factories;


use App\Domain\Explorer\Factories\BlocksCollectionFactory;
use App\Domain\Explorer\Factories\TransactionsCollectionFactory;
use App\Domain\Explorer\Factories\TransactionFactory;
use Tests\Support\Builders\CollectionBlocksSupportBuilder;
use Tests\Support\Builders\CollectionTransactionSupportBuilder;
use Tests\Support\ListBlocksMock;
use Tests\Support\ListTransactionsMock;
use Tests\TestCase;

class TransactionFactoryTest extends TestCase
{
    public function test_it_creates_transaction(){
        $factory = new TransactionFactory();
        $transactionPayload = json_decode(ListTransactionsMock::jsonResponse(), true);
        $expected = CollectionTransactionSupportBuilder::createTransaction();

        $response = $factory->createTransaction($transactionPayload['data'][0]);

        $this->assertEquals($expected, $response);
    }
}
