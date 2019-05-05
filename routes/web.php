<?php

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
Route::get('/info', function () {
   phpinfo();
});



Route::get('api','Api\ApiController@apiuser');  //查询接口数据
Route::post('api/u','Api\ApiController@reg');  //接口添加