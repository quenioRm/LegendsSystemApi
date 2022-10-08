<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'api'], function(){
    Route::group(['prefix'=>'api'], function(){
        
        Route::group(['prefix'=>'auth'], function(){

            Route::post('/login', 'AuthController@login')->name('login');
            Route::post('/register', 'AuthController@register')->name('register');
            Route::post('/logout', [AuthController::class, 'logout']);
            Route::post('/refresh', [AuthController::class, 'refresh']);
            Route::get('/user-profile', [AuthController::class, 'userProfile']);  

        });

        Route::group(['prefix'=>'activitie'], function(){

            Route::get('/GetUnits', 'ActivitieController@GetUnits')->name('getunits');
            Route::get('/DeleteUnit/{id}', 'ActivitieController@DeleteUnit')->name('deleteunit');
            Route::post('/AddUnit', 'ActivitieController@AddUnit')->name('addunit');
            Route::post('/EditUnit/{id}', 'ActivitieController@EditUnit')->name('editunit');

            Route::group(['prefix'=>'group'], function(){

            });
            
        });

        Route::group(['prefix'=>'rain'], function(){

            Route::get('/GetStations/{search}', 'RainController@GetStations')->name('getstations');

        });

    });
});