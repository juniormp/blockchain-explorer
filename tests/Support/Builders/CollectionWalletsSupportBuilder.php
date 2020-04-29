<?php


namespace Tests\Support\Builders;


use App\Domain\Explorer\Models\CollectionsTransactionDTO;
use App\Domain\Explorer\Models\CollectionsWalletDTO;
use App\Domain\Explorer\Models\TimestampDTO;
use App\Domain\Explorer\Models\TransactionDTO;
use App\Domain\Explorer\Models\WalletDTO;

class CollectionWalletsSupportBuilder
{
    public static function buildDefault(): CollectionsWalletDTO
    {
        $collections = new CollectionsWalletDTO();

        return $collections
            ->setCount(100)
            ->setPageCount(40366)
            ->setTotalCount(4036503)
            ->setNext("/transactions?transform=true&page=2&limit=100")
            ->setPrevious("")
            ->setSelf("/transactions?transform=true&page=1&limit=100")
            ->setFirst("/transactions?transform=true&page=1&limit=100")
            ->setLast("/transactions?transform=true&page=40366&limit=100")
            ->setWallet(collect([self::createWallet(), self::createWallet()]));
    }

    public static function createWallet(): WalletDTO {
        $wallet = new WalletDTO();

        return $wallet
            ->setAddress('AUexKjGtgsSpVzPLs6jNMM6vJ6znEVTQWK')
            ->setNonce('123102')
            ->setBalance('691647933769922')
            ->setIsDelegate(false)
            ->setIsResigned(false);
    }
}
