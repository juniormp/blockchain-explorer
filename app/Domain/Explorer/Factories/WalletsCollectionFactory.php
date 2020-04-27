<?php


namespace App\Domain\Explorer\Factories;


use App\Domain\Explorer\Models\CollectionsWalletDTO;
use App\Domain\Explorer\Models\WalletDTO;

class WalletsCollectionFactory
{
    public function buildCollection(array $payload): CollectionsWalletDTO {
        $walletsCollection = new CollectionsWalletDTO();
        $walletsList = collect();

        foreach ($payload['data'] as $walletPayload){
            $wallet = $this->createWallet($walletPayload);
            $walletsList->push($wallet);
        }

        $walletsCollection
            ->setCount($payload['meta']['count'])
            ->setPageCount($payload['meta']['pageCount'])
            ->setTotalCount($payload['meta']['totalCount'])
            ->setNext($payload['meta']['next'])
            ->setPrevious(!empty($payload['meta']['previous']) ?: "")
            ->setSelf($payload['meta']['self'])
            ->setFirst($payload['meta']['first'])
            ->setLast($payload['meta']['last'])
            ->setWallet($walletsList);

        return $walletsCollection;
    }

    private function createWallet(array $walletPayload): WalletDTO{
        $wallet = new WalletDTO();

        return $wallet
            ->setAddress($walletPayload['address'])
            ->setPublicKey($walletPayload['publicKey'])
            ->setNonce($walletPayload['nonce'])
            ->setBalance($walletPayload['balance'])
            ->setIsDelegate($walletPayload['isDelegate'])
            ->setIsResigned($walletPayload['isResigned']);
    }
}
