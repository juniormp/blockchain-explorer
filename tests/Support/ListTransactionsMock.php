<?php


namespace Tests\Support;


class ListTransactionsMock
{
    public static function jsonResponse()
    {
        return json_encode([
            "meta" => [
                "totalCountIsEstimate" => true,
                "count" => 100,
                "pageCount" => 40366,
                "totalCount" => 4036503,
                "next" => "/transactions?transform=true&page=2&limit=100",
                "previous" => null,
                "self" => "/transactions?transform=true&page=1&limit=100",
                "first" => "/transactions?transform=true&page=1&limit=100",
                "last" => "/transactions?transform=true&page=40366&limit=100"
            ],
            "data" => [[
                "id" => "d51d44b25a692c2ffca018e00ae185ac4ae1846df2723c7e0f79763db346f2a7",
                "blockId" => "568b79a8cbead2464036a45fe8d3ba0d18b1ff07655c665632188bef354ee293",
                "version" => 2,
                "type" => 0,
                "typeGroup" => 1,
                "amount" => "294244874",
                "fee" => "3180983",
                "sender" => "AaeQrq5ZjNgRDJ4YaMpbHYMmiWNMKhFHVT",
                "senderPublicKey" => "02b38507b0023d91b95fb10147b2c8436fa8db0cbdffd8ec74d8bf17602d034979",
                "recipient" => "AJ2oUrdGd1zLHAoL36SZdT9LomaVrUbzwo",
                "signature" => "a29cc39e893884d2586b60702aaf12b8df2710a21b0513e443dfd52c3daa47482028a1c51a012f4c38965a05f41cd1ca518cd7738d82cc1578c16eb1dcc129c3",
                "confirmations" => 20,
                "timestamp" => [
                    "epoch" => 97825312,
                    "unix" => 1587926512,
                    "human" => "2020-04-26T18:41:52.000Z"
                ],
                "nonce" => "836"
            ],[
                "id" => "d51d44b25a692c2ffca018e00ae185ac4ae1846df2723c7e0f79763db346f2a7",
                "blockId" => "568b79a8cbead2464036a45fe8d3ba0d18b1ff07655c665632188bef354ee293",
                "version" => 2,
                "type" => 0,
                "typeGroup" => 1,
                "amount" => "294244874",
                "fee" => "3180983",
                "sender" => "AaeQrq5ZjNgRDJ4YaMpbHYMmiWNMKhFHVT",
                "senderPublicKey" => "02b38507b0023d91b95fb10147b2c8436fa8db0cbdffd8ec74d8bf17602d034979",
                "recipient" => "AJ2oUrdGd1zLHAoL36SZdT9LomaVrUbzwo",
                "signature" => "a29cc39e893884d2586b60702aaf12b8df2710a21b0513e443dfd52c3daa47482028a1c51a012f4c38965a05f41cd1ca518cd7738d82cc1578c16eb1dcc129c3",
                "confirmations" => 20,
                "timestamp" => [
                    "epoch" => 97825312,
                    "unix" => 1587926512,
                    "human" => "2020-04-26T18:41:52.000Z"
                ],
                "nonce" => "836"
            ]]
        ]);
    }
}
