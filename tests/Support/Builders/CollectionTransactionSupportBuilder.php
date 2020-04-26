<?php


namespace Tests\Support\Builders;


use App\Domain\Explorer\Models\CollectionsTransactionDTO;
use App\Domain\Explorer\Models\TimestampDTO;
use App\Domain\Explorer\Models\TransactionDTO;

class CollectionTransactionSupportBuilder
{
    public static function buildDefault(): CollectionsTransactionDTO
    {
        $collections = new CollectionsTransactionDTO();

        return $collections
            ->setTotalCountIsEstimate(true)
            ->setCount(100)
            ->setPageCount(40366)
            ->setTotalCount(4036503)
            ->setNext("/transactions?transform=true&page=2&limit=100")
            ->setPrevious("")
            ->setSelf("/transactions?transform=true&page=1&limit=100")
            ->setFirst("/transactions?transform=true&page=1&limit=100")
            ->setLast("/transactions?transform=true&page=40366&limit=100")
            ->setTransactions(collect([self::createTransaction(), self::createTransaction()]));
    }

    private static function createTransaction(): TransactionDTO {
        $transaction = new TransactionDTO();

        return $transaction
            ->setId("d51d44b25a692c2ffca018e00ae185ac4ae1846df2723c7e0f79763db346f2a7")
            ->setBlockId("568b79a8cbead2464036a45fe8d3ba0d18b1ff07655c665632188bef354ee293")
            ->setVersion(2)
            ->setType(0)
            ->setTypeGroup(1)
            ->setAmount("294244874")
            ->setFee("3180983")
            ->setSender("AaeQrq5ZjNgRDJ4YaMpbHYMmiWNMKhFHVT")
            ->setSenderPublicKey("02b38507b0023d91b95fb10147b2c8436fa8db0cbdffd8ec74d8bf17602d034979")
            ->setRecipient("AJ2oUrdGd1zLHAoL36SZdT9LomaVrUbzwo")
            ->setSignature("a29cc39e893884d2586b60702aaf12b8df2710a21b0513e443dfd52c3daa47482028a1c51a012f4c38965a05f41cd1ca518cd7738d82cc1578c16eb1dcc129c3")
            ->setConfirmations(20)
            ->setTimestamp(self::createTimestamp())
            ->setNonce("836");
    }

    private static function createTimestamp(): TimestampDTO
    {
        $timestamp = new TimestampDTO();

        return $timestamp
            ->setEpoch(97825312)
            ->setUnix(1587926512)
            ->setHuman("2020-04-26T18:41:52.000Z");
    }
}
