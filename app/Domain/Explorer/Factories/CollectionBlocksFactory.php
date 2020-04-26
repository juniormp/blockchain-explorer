<?php


namespace App\Domain\Explorer\Factories;


use App\Domain\Explorer\Models\BlockDTO;
use App\Domain\Explorer\Models\CollectionBlocksDTO;
use App\Domain\Explorer\Models\ForgedDTO;
use App\Domain\Explorer\Models\GeneratorDTO;
use App\Domain\Explorer\Models\PayloadDTO;
use App\Domain\Explorer\Models\TimestampDTO;

class CollectionBlocksFactory
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
            ->setPrevious($response['meta']['previous'])
            ->setSelf($response['meta']['self'])
            ->setFirst($response['meta']['first'])
            ->setLast($response['meta']['last'])
            ->setBlocks($blocksList);

        return $collectionBlocks;
    }

    private function createBlock(array $response): BlockDTO{
        $block = new BlockDTO();

        return $block
            ->setId($response['id'])
            ->setVersion($response['version'])
            ->setHeight($response['height'])
            ->setPrevious($response['previous'])
            ->setForged($this->createForged($response['forged']))
            ->setPayload($this->createPayload($response['payload']))
            ->setGenerator($this->createGenerator($response['generator']))
            ->setSignature($response['signature'])
            ->setConfirmations($response['confirmations'])
            ->setTransactions($response['transactions'])
            ->setTimestamp($this->createTimestamp($response['timestamp']));
    }

    private function createForged(array $response): ForgedDTO {
        $forged = new ForgedDTO();

        return $forged
            ->setReward($response['reward'])
            ->setFee($response['fee'])
            ->setTotal($response['total'])
            ->setAmount($response['amount']);
    }

    private function createPayload(array $response): PayloadDTO {
        $payload = new PayloadDTO();

        return $payload
            ->setHash($response['hash'])
            ->setLength($response['length']);
    }

    private function createGenerator(array $response): GeneratorDTO {
        $generator = new GeneratorDTO();

        return $generator
            ->setUsername($response['username'])
            ->setAddress($response['address'])
            ->setPublicKey($response['publicKey']);
    }

    private function createTimestamp(array $response): TimestampDTO {
        $timestamp = new TimestampDTO();

        return $timestamp
            ->setEpoch($response['epoch'])
            ->setUnix($response['unix'])
            ->setHuman($response['human']);
    }
}
