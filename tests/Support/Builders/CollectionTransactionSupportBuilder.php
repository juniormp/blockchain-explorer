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

    public static function createTransaction(): TransactionDTO {
        $transaction = new TransactionDTO();

        return $transaction
            ->setId("d51d44b25a692c2ffca018e00ae185ac4ae1846df2723c7e0f79763db346f2a7")
            ->setBlockId("568b79a8cbead2464036a45fe8d3ba0d18b1ff07655c665632188bef354ee293")
            ->setAmount("294244874")
            ->setFee("3180983")
            ->setSender("AaeQrq5ZjNgRDJ4YaMpbHYMmiWNMKhFHVT")
            ->setRecipient("AJ2oUrdGd1zLHAoL36SZdT9LomaVrUbzwo")
            ->setConfirmations(20)
            ->setTimestamp("2020-04-26T18:41:52.000Z")
            ->setNonce("836");
    }
}
