<?php
namespace SahelAshrafi\ApiCaller;
use Illuminate\Support\ServiceProvider;

class ApiCallerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        dd("package works well");
    }

    public function register()
    {

    }
}
