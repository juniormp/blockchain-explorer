<?php


namespace App\Domain\Explorer\Factories;




use Illuminate\Support\Collection;

class BlocksCollectionFactory extends BlockFactory
{
    public function buildCollection(array $response): Collection {
        $blocksList = collect();

        foreach ($response['data'] as $blockPayload){
            $block = $this->createBlock($blockPayload);
            $blocksList->push($block);
        }

        return $blocksList;
    }
}
