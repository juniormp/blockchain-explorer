<?php


namespace App\Domain\Explorer\Factories;


use App\Domain\Explorer\Models\BlockDTO;
use App\Domain\Explorer\Models\ForgedDTO;

class BlockFactory
{
    public function createBlock(array $response): BlockDTO{
        $block = new BlockDTO();

        return $block
            ->setId($response['id'])
            ->setHeight($response['height'])
            ->setForged($this->createForged($response['forged']))
            ->setGenerator($response['generator']['username'])
            ->setConfirmations($response['confirmations'])
            ->setTransactions($response['transactions'])
            ->setTimestamp($response['timestamp']['human']);
    }

    private function createForged(array $response): ForgedDTO {
        $forged = new ForgedDTO();

        return $forged
            ->setReward($response['reward'])
            ->setFee($response['fee'])
            ->setTotal($response['total'])
            ->setAmount($response['amount']);
    }
}
