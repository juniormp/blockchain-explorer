<?php


namespace App\Domain\Explorer\Factories;


use App\Domain\Explorer\Models\CollectionBlocksDTO;

class CollectionBlocksFactory extends BlockFactory
{
    public function buildCollection(array $response): CollectionBlocksDTO {
        $collectionBlocks = new CollectionBlocksDTO();
        $blocksList = collect();

        foreach ($response['data'] as $blockPayload){
            $block = $this->createBlock($blockPayload);
            $blocksList->push($block);
        }


        $collectionBlocks
            ->setTotalCountIsEstimate($response['meta']['totalCountIsEstimate'])
            ->setCount($response['meta']['count'])
            ->setPageCount($response['meta']['pageCount'])
            ->setTotalCount($response['meta']['totalCount'])
            ->setNext($response['meta']['next'])
            ->setPrevious(!empty($response['meta']['previous']) ?: "")
            ->setSelf($response['meta']['self'])
            ->setFirst($response['meta']['first'])
            ->setLast($response['meta']['last'])
            ->setBlocks($blocksList);

        return $collectionBlocks;
    }

}
