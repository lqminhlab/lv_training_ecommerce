<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'order'], function () {
    Route::group(['middleware' => 'auth:api'], function(){
        Route::post('/create', 'API\OrderController@store');
        Route::post('/get', 'API\OrderController@detail');
    });
});

Route::middleware('auth:api')->get('/booking', function (Request $request) {
    return $request->user();
});