<?php


namespace Tests\Infrastructure\Request;


use App\Infrastructure\ExternalData\Requests\BlockRequestCommand;
use Tests\TestCase;

class BlocksRequestCommandTest extends TestCase
{
    public function test_it_returns_action_list_blocks_uri(){
        $request = new BlockRequestCommand();

        $this->assertEquals('blocks', $request->getHttpAction());
    }
}
