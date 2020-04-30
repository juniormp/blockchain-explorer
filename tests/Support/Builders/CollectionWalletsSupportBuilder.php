<?php


namespace Tests\Support\Builders;

use App\Domain\Explorer\Models\WalletDTO;
use Illuminate\Support\Collection;


class CollectionWalletsSupportBuilder
{
    public static function buildDefault(): Collection
    {
        return collect([self::createWallet(), self::createWallet()]);
    }

    public static function createWallet(): WalletDTO {
        $wallet = new WalletDTO();

        return $wallet
            ->setAddress('AUexKjGtgsSpVzPLs6jNMM6vJ6znEVTQWK')
            ->setNonce('123102')
            ->setVote('0217ff1ec656f2354a899bde097bb3131a9730fe491bb87dedb96489120be9154f')
            ->setBalance('691647933769922')
            ->setIsDelegate(false)
            ->setIsResigned(false);
    }
}
