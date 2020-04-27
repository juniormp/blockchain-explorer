<?php


namespace Tests\Domain\Explorer\Factories;


use App\Domain\Explorer\Factories\DelegatesCollectionFactory;
use Tests\Support\Builders\CollectionDelegatesSupportBuilder;
use Tests\Support\DelegatesListMock;
use Tests\TestCase;

class DelegatesCollectionFactoryTest extends TestCase
{
    public function test_it_creates_delegates_collection(){
        $factory = new DelegatesCollectionFactory();
        $delegatesPayload = json_decode(DelegatesListMock::jsonResponse(), true);
        $expected = CollectionDelegatesSupportBuilder::buildDefault();

        $response = $factory->buildCollection($delegatesPayload);

        $this->assertEquals($expected, $response);
    }
}
