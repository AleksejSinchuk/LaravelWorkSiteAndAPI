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
//
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix('/vacancy')->group(function (){
    Route::get('/',['uses'=>'VacancyController@get']);
    Route::get('/{entityId}',['uses'=>'VacancyController@detail'])->where(['entityId'=>'[0-9+]']);
    Route::post('/add',['uses'=>'VacancyController@create']);
    Route::delete('/{entityId}',['uses'=>'VacancyController@delete'])->where(['entityId'=>'[0-9+]']);
    Route::put('/{entityId}',['uses'=>'VacancyController@update'])->where(['entityId'=>'[0-9+]']);
});
Route::prefix('/company')->group(function (){
    Route::get('/',['uses'=>'CompanyController@get']);
    Route::get('/{entityId}',['uses'=>'CompanyController@detail'])->where(['entityId'=>'[0-9+]']);
    Route::post('/add',['uses'=>'CompanyController@create']);
    Route::delete('/delete/{entityId}',['uses'=>'CompanyController@delete'])->where(['entityId'=>'[0-9+]']);
    Route::put('/update/{entityId}',['uses'=>'CompanyController@update'])->where(['entityId'=>'[0-9+]']);
});
