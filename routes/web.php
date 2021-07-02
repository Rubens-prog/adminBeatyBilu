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
/*----------------views---------------*/


Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('admin/admin');
});


Route::get('/admin/sobre', function () {
    return view('about/index');
});

Route::get('/admin/servicos', function () {
    return view('serviço/index');
});

Route::get('/admin/depoimentos', function () {
    return view('depoimentos/index');
});

Route::get('/admin/contato', function () {
    return view('contact/index');
});


/*-------------------------Sobre----------------------------*/

Route::post('/sobre/salva',[ControllerSobre::class],'salvaSobre');