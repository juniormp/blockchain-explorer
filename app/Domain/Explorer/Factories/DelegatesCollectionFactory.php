<?php


namespace App\Domain\Explorer\Factories;


use App\Domain\Explorer\Models\DelegateDTO;
use Illuminate\Support\Collection;

class DelegatesCollectionFactory
{
    public function buildCollection(array $payload): Collection {
        $delegatesList = collect();

        foreach ($payload['data'] as $delegatesPayload){
            $wallet = $this->createDelegate($delegatesPayload);
            $delegatesList->push($wallet);
        }

        return $delegatesList;
    }

    private function createDelegate(array $walletPayload): DelegateDTO {
        $delegate = new DelegateDTO();

        return $delegate
            ->setUsername($walletPayload['username'])
            ->setAddress($walletPayload['address'])
            ->setPublicKey($walletPayload['publicKey'])
            ->setVotes($walletPayload['votes'])
            ->setRank($walletPayload['rank'])
            ->setIsResigned($walletPayload['isResigned']);
    }
}
