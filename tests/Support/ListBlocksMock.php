<?php


namespace Tests\Support;


class ListBlocksMock
{
    public static function jsonResponse()
    {
        return json_encode([
            "meta" => [
                "totalCountIsEstimate" => false,
                "count" => 100,
                "pageCount" => 120785,
                "totalCount" => 12078473,
                "next" => "/blocks?transform=true&page=2&limit=100",
                "previous" => null,
                "self" => "/blocks?transform=true&page=1&limit=100",
                "first" => "/blocks?transform=true&page=1&limit=100",
                "last" => "/blocks?transform=true&page=120785&limit=100"
            ],
            "data" => [
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
            ], [
                "id" => "83a56d07e7a1c5bcdc55648f96578385a053f8f4e05fa372c7ce2d6f063b509c",
                "version" => 0,
                "height" => 12078472,
                "previous" => "850e17c9f58dc144c45edd7407343642751b81ecfa861272b4b0eda220744e4b",
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
                    "username" => "cams_yellow_jacket",
                    "address" => "AGvhBGb4cCZnP2wUo1oCSi83LUtGDG7Y6X",
                    "publicKey" => "02902de3fcb257e9248e2ae668d2e314027f0ca05c1eb21e1c5817c7580014669f"],
                "signature" => "3045022100b5570d43c68a34938b4682d2c46d680dfca07aa647140d3d1ed033bf59892b90022032e49ec819cde2ee4f4bf5eccef708afaa1a7aca307c9267a4eaddd836b16163",
                "confirmations" => 1,
                "transactions" => 0,
                "timestamp" => [
                    "epoch" => 97807232,
                    "unix" => 1587908432,
                    "human" => "2020-04-26T13:40:32.000Z"
                ]
            ]
        ]);
    }
}
