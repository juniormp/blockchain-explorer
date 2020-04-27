<?php


namespace Tests\Infrastructure\Request;


use App\Infrastructure\ExternalData\Requests\ListBlocksRequest;
use Tests\TestCase;

class ListBlockRequestTest extends TestCase
{
    public function test_it_returns_action_list_blocks_uri(){
        $request = new ListBlocksRequest();

        $this->assertEquals('blocks', $request->getHttpAction());
    }
}
