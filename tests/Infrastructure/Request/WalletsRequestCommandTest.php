<?php


namespace Tests\Infrastructure\Request;


use App\Infrastructure\ExternalData\Requests\WalletsRequestCommand;
use Tests\TestCase;

class WalletsRequestCommandTest extends TestCase
{
    public function test_it_returns_list_wallets_uri(){
        $request = new WalletsRequestCommand();

        $this->assertEquals('wallets', $request->getHttpAction());
    }

    public function test_it_returns_transaction_by_wallet_address(){
        $request = new WalletsRequestCommand();

        $request->transactionsFromAddress("a1b1c1d1");

        $this->assertEquals('wallets/a1b1c1d1/transactions', $request->getHttpAction());
    }
}
