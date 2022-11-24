<?php
namespace SahelAshrafi\ApiCaller;

use Illuminate\Support\Facades\Http;
class ApiCaller{
    public function weather()
    {
        $client = Http::get('http://api.weatherstack.com/current',[
            "access_key"=>"f8c6b49e1d252c81f23cad2767ae74b7",
            "query"=>"New York"
        ]);
        return $client->json();
    }

}
