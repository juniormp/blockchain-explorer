<?php


namespace Tests\Domain\Explorer\Factories;


use App\Domain\Explorer\Factories\BlocksFactory;
use Tests\Support\Builders\CollectionBlocksSupportBuilder;
use Tests\Support\ListBlocksMock;
use Tests\TestCase;

class BlocksFactoriesTest extends TestCase
{
    public function test_it_creates_collection_blocks(){
        $factory = new BlocksFactory();
        $blockArray = json_decode(ListBlocksMock::jsonResponse(), true);
        $expected = CollectionBlocksSupportBuilder::buildDefault();

        $response = $factory->buildCollection($blockArray);

        $this->assertEquals($expected, $response);
    }
}
