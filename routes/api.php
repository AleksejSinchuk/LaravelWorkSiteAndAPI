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
    Route::get('/',[uses=>'VacancyController@get']);
    Route::get('/{vacancy_id}',[uses=>'VacancyController@detail'])->where(['vacancy_id'=>'[0-9+]']);;
    Route::post('/',[uses=>'VacancyController@create']);
    Route::delete('/{vacancy_id}',[uses=>'VacancyController@delete'])->where(['vacancy_id'=>'[0-9+]']);
    Route::put('/{vacancy_id}',[uses=>'VacancyController@update'])->where(['vacancy_id'=>'[0-9+]']);
});
Route::prefix('/company')->group(function (){
    Route::get('/',[uses=>'CompanyController@get']);
    Route::get('/{company_id}',[uses=>'CompanyController@detail'])->where(['company_id'=>'[0-9+]']);;
    Route::post('/',[uses=>'CompanyController@create']);
    Route::delete('/{company_id}',[uses=>'VacancyController@delete'])->where(['company_id'=>'[0-9+]']);
    Route::put('/{company_id}',[uses=>'CompanyController@update'])->where(['compan_id'=>'[0-9+]']);
});
