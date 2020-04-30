<?php


namespace App\Domain\Explorer\Factories;


use Illuminate\Support\Collection;

class WalletsCollectionFactory extends WalletsFactory
{
    public function buildCollection(array $payload): Collection {
        $walletsList = collect();

        foreach ($payload['data'] as $walletPayload){
            $wallet = $this->createWallet($walletPayload);
            $walletsList->push($wallet);
        }

        return $walletsList;
    }
}
