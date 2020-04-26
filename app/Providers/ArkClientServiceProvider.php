<?php


namespace App\Providers;


use App\Infrastructure\ExternalData\ArkClientApi;
use App\Infrastructure\ExternalData\ArkClientService;
use Carbon\Laravel\ServiceProvider;
use GuzzleHttp\Client as GuzzleClient;

class ArkClientServiceProvider extends ServiceProvider
{
    function register()
    {
        $this->app->bind(ArkClientService::class, function () {
            $arkClientApi = new ArkClientApi(new GuzzleClient([
                'base_url' => config('services.ark')['host']
            ]));

            return new ArkClientService($arkClientApi);
        });
    }
}
