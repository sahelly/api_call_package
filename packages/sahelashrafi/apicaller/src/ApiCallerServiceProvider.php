<?php
namespace SahelAshrafi\ApiCaller;
use Illuminate\Support\ServiceProvider;

class ApiCallerServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->singleton(ApiCaller::class, function (){
            return new ApiCaller();
        });
    }
}
