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
    return view('home');
});
Route::get('ku', function () {
    return view('ku');
});
Route::get('profile', function () {
    return view('profile');
});
Route::get('company', function () {
    return view('company');
});

$api = app(\Dingo\Api\Routing\Router::class);

$api->version('v1', function ($api) {

    $api->get('ku', function () {
        return view('ku');
    });

});