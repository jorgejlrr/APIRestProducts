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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('v1/product','APIController@APIListProducts');
Route::get('v1/product/{id}','APIController@APIGetProduct');
Route::post('v1/product','APIController@APICreateProduct');
Route::put('v1/product/{id}','APIController@APIUpdateProduct');
Route::delete('v1/product/{id}','APIController@APIDeleteProduct');