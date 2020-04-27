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
            ->setTotalCount(4036503)
            ->setNext("/transactions?transform=true&page=2&limit=100")
            ->setPrevious("")
            ->setSelf("/transactions?transform=true&page=1&limit=100")
            ->setFirst("/transactions?transform=true&page=1&limit=100")
            ->setLast("/transactions?transform=true&page=40366&limit=100")
            ->setWallet(collect([self::createWallet(), self::createTransaction()]));
    }

    public static function createWallet(): WalletDTO {
        $wallet = new WalletDTO();

        return $wallet
            ->setAddress('AdS7WvzqusoP759qRo6HDmUz2L34u4fMHz')
            ->setPublicKey('03e7635481b035149829ef74f972e69eca75363bc96e75be57579b0e6fb3f22192')
            ->setNonce('20')
            ->setBalance('698316659123862')
            ->setIsDelegate(false)
            ->setIsResigned(false);
    }
}
