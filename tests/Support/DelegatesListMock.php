<?php


namespace Tests\Support;


class DelegatesListMock
{
    public static function jsonResponse()
    {
        return json_encode([
            "meta" => [
                "count" => 100,
                "pageCount" => 12,
                "totalCount" => 1132,
                "next" => "/delegates?page=2&limit=100",
                "previous" => null,
                "self" => "/delegates?page=1&limit=100",
                "first" => "/delegates?page=1&limit=100",
                "last" => "/delegates?page=12&limit=100"
            ],
            "data" => [[
                "username" => "biz_classic",
                "address" => "AKdr5d9AMEnsKYxpDcoHdyyjSCKVx3r9Nj",
                "publicKey" => "020431436cf94f3c6a6ba566fe9e42678db8486590c732ca6c3803a10a86f50b92",
                "votes" => "316486744580272",
                "rank" => 1,
                "isResigned" => false,
            ], [
                "username" => "biz_classic",
                "address" => "AKdr5d9AMEnsKYxpDcoHdyyjSCKVx3r9Nj",
                "publicKey" => "020431436cf94f3c6a6ba566fe9e42678db8486590c732ca6c3803a10a86f50b92",
                "votes" => "316486744580272",
                "rank" => 1,
                "isResigned" => false,
            ]]
        ]);
    }
}
