<?php


namespace Tests\Infrastructure\Request;


use App\Infrastructure\ExternalData\Requests\DelegatesRequestCommand;
use Tests\TestCase;

class DelegatesRequestCommandTest extends TestCase
{
    public function test_it_returns_list_transactions_uri(){
        $request = new DelegatesRequestCommand();

        $this->assertEquals('delegates', $request->getHttpAction());
    }
}
