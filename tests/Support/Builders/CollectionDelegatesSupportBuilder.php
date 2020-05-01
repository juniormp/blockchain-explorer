<?php


namespace Tests\Support\Builders;


use App\Domain\Explorer\Models\DelegateDTO;
use Illuminate\Support\Collection;

class CollectionDelegatesSupportBuilder
{
    public static function buildDefault(): Collection
    {
        return collect([self::createDelegate(), self::createDelegate()]);
    }

    public static function createDelegate(): DelegateDTO {
        $delegate = new DelegateDTO();

        return $delegate
            ->setUsername("biz_classic")
            ->setAddress("AKdr5d9AMEnsKYxpDcoHdyyjSCKVx3r9Nj")
            ->setPublicKey("020431436cf94f3c6a6ba566fe9e42678db8486590c732ca6c3803a10a86f50b92")
            ->setVotes("316486744580272")
            ->setRank(1)
            ->setIsResigned(false);
    }
}
