<?php


namespace Tests\Support;


class WalletsListMock
{
    public static function jsonResponse()
    {
        return json_encode([
            "meta" => [
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
                "address" => "AUexKjGtgsSpVzPLs6jNMM6vJ6znEVTQWK",
                "publicKey" => "02ff171adaef486b7db9fc160b28433d20cf43163d56fd28fee72145f0d5219a4b",
                "nonce" => "123102",
                "balance" => "691647933769922",
                "attributes" => [
                    "vote" => "0217ff1ec656f2354a899bde097bb3131a9730fe491bb87dedb96489120be9154f"
                ],
                "isDelegate" => false,
                "isResigned" => false
            ], [
                "address" => "AUexKjGtgsSpVzPLs6jNMM6vJ6znEVTQWK",
                "publicKey" => "02ff171adaef486b7db9fc160b28433d20cf43163d56fd28fee72145f0d5219a4b",
                "nonce" => "123102",
                "balance" => "691647933769922",
                "attributes" => [
                    "vote" => "0217ff1ec656f2354a899bde097bb3131a9730fe491bb87dedb96489120be9154f"
                ],
                "isDelegate" => false,
                "isResigned" => false
            ]]
        ]);
    }
}
