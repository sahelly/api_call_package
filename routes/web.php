<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/use-package', function () {
//    return  \SahelAshrafi\ApiCaller\ApiCaller::weather();
    $test = new \SahelAshrafi\ApiCaller\ApiCaller();
    return $test->weather();
});


