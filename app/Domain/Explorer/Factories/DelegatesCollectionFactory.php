<?php


namespace App\Domain\Explorer\Factories;


use App\Domain\Explorer\Models\DelegateDTO;
use App\Domain\Explorer\Models\DelegatesCollectionDTO;

class DelegatesCollectionFactory
{
    public function buildCollection(array $payload): DelegatesCollectionDTO {
        $delegatesCollection = new DelegatesCollectionDTO();
        $delegatesList = collect();

        foreach ($payload['data'] as $delegatesPayload){
            $wallet = $this->createDelegate($delegatesPayload);
            $delegatesList->push($wallet);
        }

        $delegatesCollection
            ->setCount($payload['meta']['count'])
            ->setPageCount($payload['meta']['pageCount'])
            ->setTotalCount($payload['meta']['totalCount'])
            ->setNext($payload['meta']['next'])
            ->setPrevious(!empty($payload['meta']['previous']) ?: "")
            ->setSelf($payload['meta']['self'])
            ->setFirst($payload['meta']['first'])
            ->setLast($payload['meta']['last'])
            ->setDelegates($delegatesList);

        return $delegatesCollection;
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
