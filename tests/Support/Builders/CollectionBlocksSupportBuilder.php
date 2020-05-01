<?php


namespace Tests\Support\Builders;


use App\Domain\Explorer\Models\BlockDTO;
use App\Domain\Explorer\Models\ForgedDTO;
use Illuminate\Support\Collection;


class CollectionBlocksSupportBuilder
{
    public static function buildDefault(): Collection
    {
        return collect([self::createBlock(), self::createBlock()]);
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
