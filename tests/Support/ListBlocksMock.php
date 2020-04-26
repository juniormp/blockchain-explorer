<?php


namespace Tests\Support;


class ListBlocksMock
{
    public static function jsonResponse()
    {
        return json_encode([
            "id" => "c427427e51a7a30309888a862c1a0b03f766fb07237a86d8da9509e3f8eac260",
            "version" => 0,
            "height" => 12071949,
            "previous" => "c8646cb12f2e656616bc9dac7c34f77a30231ef73cf2f829fff503326a864cdb",
            "forged" => [
                "reward" => "200000000",
                "fee" => "0",
                "total" => "200000000",
                "amount" => "0"
            ],
            "payload" => [
                "hash" => "e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855",
                "length" => 0
            ],
            "generator" => [
                "username" => "doc",
                "address" => "AR2iXnLRp9HuoT584m6tjNWLHGWdX8uuGK",
                "publicKey" => "03cefbfa0c1c853084591b62a9aad0116029eaebdc27c2e3b811b1b0aebb928fc6"],
            "signature" => "3045022100f4a1720135345c202011fa5365d8b1888da70ea8aa6e295ca0e499760553e7bb022008469b0e54080ddaa3a4d08c7fa6aafcd4a949e4d4e8c220c81a4c7b6c0ff4ca",
            "confirmations" => 1,
            "transactions" => 0,
            "timestamp" => [
                "epoch" => 97753880,
                "unix" => 1587855080,
                "human" => "2020-04-25T22:51:20.000Z"
            ]
        ]);
    }
}
