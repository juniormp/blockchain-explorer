<?php


namespace Tests\Domain\Explorer\Factories;


use App\Domain\Explorer\Factories\BlockFactory;
use Tests\Support\Builders\CollectionBlocksSupportBuilder;
use Tests\Support\ListBlocksMock;
use Tests\TestCase;

class BlockFactoryTest extends TestCase
{
    public function test_it_creates_block(){
        $factory = new BlockFactory();
        $blockArray = json_decode(ListBlocksMock::jsonResponse(), true);
        $expected = CollectionBlocksSupportBuilder::createBlock();

        $response = $factory->createBlock($blockArray['data'][0]);

        $this->assertEquals($expected, $response);
    }
}
