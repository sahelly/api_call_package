<?php
namespace SahelAshrafi\ApiCaller;

use App\Models\weatherReports;
use Illuminate\Support\Facades\Http;
class ApiCaller{
    public function weather()
    {
        $client = Http::get('http://api.weatherstack.com/current',[
            "access_key"=>"f8c6b49e1d252c81f23cad2767ae74b7",
            "query"=>"New York"
        ]);
        $responseBody=json_decode($client->getBody());
        $city_name=$responseBody->location->name;
        $country=$responseBody->location->country;
        $lat=$responseBody->location->lat;
        $lon=$responseBody->location->lon;

        $observation_time=$responseBody->current->observation_time;
        $temperature=$responseBody->current->temperature;
        $wind_speed=$responseBody->current->wind_speed;
        $wind_degree=$responseBody->current->wind_degree;
        $wind_dir=$responseBody->current->wind_dir;
        $pressure=$responseBody->current->pressure;
        $humidity=$responseBody->current->humidity;


        $weather_data= new weatherReports();
        $weather_data->city_name = $city_name;
        $weather_data->country = $country;
        $weather_data->	lat =$lat ;
        $weather_data->lan = $lon;
        $weather_data->observation_time = $observation_time;
        $weather_data->temperature =$temperature ;
        $weather_data->wind_speed = $wind_speed;
        $weather_data->wind_degree = $wind_degree;
        $weather_data->wind_dir = $wind_dir;
        $weather_data->pressure = $pressure;
        $weather_data->humidity =$humidity;

        $weather_data->save();


        return array(
            "city_name"=>$city_name,
            "country"=>$country,
            "lat"=>$lat,
            "lon"=>$lon,
            "observation_time"=>$observation_time,
            "temprature"=>$temperature,
            "wind_speed"=>$wind_speed,
            "wind_degree"=>$wind_degree,
            "wind_direction"=>$wind_dir,
            "pressure"=>$pressure,
            "humidity"=>$humidity
        );

    }

}
