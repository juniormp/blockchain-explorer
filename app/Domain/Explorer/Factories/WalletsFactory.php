<?php


namespace App\Domain\Explorer\Factories;


use App\Domain\Explorer\Models\WalletDTO;

class WalletsFactory
{
    public function createWallet(array $walletPayload): WalletDTO
    {
        $wallet = new WalletDTO();

        $this->verifyPayload($walletPayload);

        return $wallet
            ->setAddress($walletPayload['address'])
            ->setNonce($walletPayload['nonce'])
            ->setVote($this->verifyPayload($walletPayload))
            ->setBalance($walletPayload['balance'])
            ->setIsDelegate($walletPayload['isDelegate'])
            ->setIsResigned($walletPayload['isResigned']);
    }

    public function verifyPayload(array $walletPayload)
    {
        if (array_key_exists('attributes', $walletPayload) &&
            array_key_exists('vote', $walletPayload['attributes'])) {
            return $walletPayload['attributes']['vote'];
        } else {
            return "";
        }
    }
}
