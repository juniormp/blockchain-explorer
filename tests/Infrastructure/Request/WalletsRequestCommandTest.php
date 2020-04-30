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
}
