<?php


namespace App\Domain\Explorer\Factories;


use App\Domain\Explorer\Models\WalletDTO;

class WalletsFactory
{
    public function createWallet(array $walletPayload): WalletDTO{
        $wallet = new WalletDTO();

         return $wallet
            ->setAddress($walletPayload['address'])
            ->setNonce($walletPayload['nonce'])
            ->setBalance($walletPayload['balance'])
            ->setIsDelegate($walletPayload['isDelegate'])
            ->setIsResigned($walletPayload['isResigned']);
    }
}
