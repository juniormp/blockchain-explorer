<?php


namespace Tests\Support\Builders;


use App\Domain\Explorer\Models\BlockDTO;
use App\Domain\Explorer\Models\CollectionBlocksDTO;
use App\Domain\Explorer\Models\ForgedDTO;
use App\Domain\Explorer\Models\GeneratorDTO;
use App\Domain\Explorer\Models\PayloadDTO;
use App\Domain\Explorer\Models\TimestampDTO;

class CollectionBlocksSupportBuilder
{
    public static function buildDefault(): CollectionBlocksDTO
    {
        $blocks = new CollectionBlocksDTO();

        return $blocks
            ->setTotalCountIsEstimate(false)
            ->setCount(100)
            ->setPageCount(120785)
            ->setTotalCount(12078473)
            ->setNext("/blocks?transform=true&page=2&limit=100")
            ->setPrevious("")
            ->setSelf("/blocks?transform=true&page=1&limit=100")
            ->setFirst("/blocks?transform=true&page=1&limit=100")
            ->setLast("/blocks?transform=true&page=120785&limit=100")
            ->setBlocks(collect([self::createBlock(), self::createBlock()]));
    }

    private static function createBlock(): BlockDTO
    {
        $block = new BlockDTO();

        return $block
            ->setId("c427427e51a7a30309888a862c1a0b03f766fb07237a86d8da9509e3f8eac260")
            ->setVersion(0)
            ->setHeight(12071949)
            ->setPrevious("c8646cb12f2e656616bc9dac7c34f77a30231ef73cf2f829fff503326a864cdb")
            ->setForged(self::createForged())
            ->setPayload(self::createPayload())
            ->setGenerator(self::createGenerator())
            ->setSignature("3045022100f4a1720135345c202011fa5365d8b1888da70ea8aa6e295ca0e499760553e7bb022008469b0e54080ddaa3a4d08c7fa6aafcd4a949e4d4e8c220c81a4c7b6c0ff4ca")
            ->setConfirmations(1)
            ->setTransactions(0)
            ->setTimestamp(self::createTimestamp());
    }

    private static function createForged(): ForgedDTO
    {
        $forged = new ForgedDTO();

        return $forged
            ->setReward(200000000)
            ->setFee(0)
            ->setTotal(200000000)
            ->setAmount(0);
    }

    private static function createPayload(): PayloadDTO
    {
        $payload = new PayloadDTO();

        return $payload
            ->setHash("e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855")
            ->setLength(0);
    }

    private static function createGenerator(): GeneratorDTO
    {
        $generator = new GeneratorDTO();

        return $generator
            ->setUsername("doc")
            ->setAddress("AR2iXnLRp9HuoT584m6tjNWLHGWdX8uuGK")
            ->setPublicKey("03cefbfa0c1c853084591b62a9aad0116029eaebdc27c2e3b811b1b0aebb928fc6");
    }

    private static function createTimestamp(): TimestampDTO
    {
        $timestamp = new TimestampDTO();

        return $timestamp
            ->setEpoch(97753880)
            ->setUnix(1587855080)
            ->setHuman("2020-04-25T22:51:20.000Z");
    }
}
