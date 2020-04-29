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

    public static function createBlock(): BlockDTO
    {
        $block = new BlockDTO();

        return $block
            ->setId("c427427e51a7a30309888a862c1a0b03f766fb07237a86d8da9509e3f8eac260")
            ->setHeight(12071949)
            ->setForged(self::createForged())
            ->setGenerator("dutchdelegate")
            ->setConfirmations(1)
            ->setTransactions(0)
            ->setTimestamp("2020-04-25T22:51:20.000Z");
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
}
