<?php


namespace Tests\Support\Builders;


use App\Domain\Explorer\Models\DelegateDTO;
use App\Domain\Explorer\Models\DelegatesCollectionDTO;

class CollectionDelegatesSupportBuilder
{
    public static function buildDefault(): DelegatesCollectionDTO
    {
        $collections = new DelegatesCollectionDTO();

        return $collections
            ->setCount(100)
            ->setPageCount(12)
            ->setTotalCount(1132)
            ->setNext("/delegates?page=2&limit=100")
            ->setPrevious("")
            ->setSelf("/delegates?page=1&limit=100")
            ->setFirst("/delegates?page=1&limit=100")
            ->setLast("/delegates?page=12&limit=100")
            ->setDelegates(collect([self::createDelegate(), self::createDelegate()]));
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
