<?php


namespace Tests\Infrastructure\Request;


use App\Infrastructure\ExternalData\Requests\TransactionRequestCommand;
use Tests\TestCase;

class TransactionRequestCommandTest extends TestCase
{
    public function test_it_returns_list_transactions_uri(){
        $request = new TransactionRequestCommand();

        $this->assertEquals('transactions', $request->getHttpAction());
    }

    public function test_it_returns_transaction_by_id_uri(){
        $request = new TransactionRequestCommand();

        $request->byId(100);

        $this->assertEquals('transactions/100', $request->getHttpAction());
    }

    public function test_it_returns_transaction_by_wallet_address(){
        $request = new TransactionRequestCommand();

        $request->byWalletAddress("a1b1c1d1");

        $this->assertEquals('wallets/a1b1c1d1/transactions', $request->getHttpAction());
    }
}
