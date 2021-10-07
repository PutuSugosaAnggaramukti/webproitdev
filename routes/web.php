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

route::get('/home','tampilan_controller@viewlayout');
route::get('/loginadmin','tampilan_controller@login');
route::get('/datawebkp','data_controller@viewdata');
route::get('/hire','tampilan_controller@hire');
route::get('/layoutadmin','data_controller@index');
route::get('/view_data/{id}','data_controller@vdataweb');
route::get('/slametcare','tampilan_controller@viewslamet');
route::post('/hire/tambah','data_controller@inputdata');
route::get('/prosesviewdata/{id}','data_controller@viewdataweb')->name('prosesviewdata');
route::get('/filterdata','data_controller@filterdata');
