<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerSobre;
use App\Http\Controllers\ControllerInicio;


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
    $dados = \App\Models\Sobre::get();
    $inicios = \App\Models\Inicio::get();
    return view('index')->with('dados', $dados)->with('inicios', $inicios);
});

Route::get('/admin', function () {
    return view('admin.admin');
});


Route::get('/admin/sobre', function () {

    $dados = \App\Models\Sobre::get();
    return view('about.index')->with('dados', $dados);
});

Route::get('/admin/servicos', function () {
    return view('serviço.index');
});

Route::get('/admin/depoimentos', function () {
    return view('depoimentos.index');
});

Route::get('/admin/contato', function () {
    return view('contact.index');
});

Route::get('/admin/inicio', function () {
    $dados = \App\Models\Inicio::get();
    return view('inicio.index')->with('dados', $dados);
    
});

/*-------------------------Inicio----------------------------*/
Route::get('/admin/inicio/adicionar', function() {
    return view('inicio.add');
});

Route::post('/admin/inicio/salva',[ControllerInicio::class, 'salvaInicio']);

Route::get('/admin/inicio/edita',[ControllerInicio::class, 'editInicio']);

Route::post('/admin/inicio/update',[ControllerInicio::class, 'updateInicio']);

Route::get('/admin/inicio/delete',[ControllerInicio::class, 'deleteInicio']);

/*-------------------------Sobre----------------------------*/

Route::post('/admin/sobre/salva',[ControllerSobre::class,'salvaSobre']);

Route::get('/admin/sobre/adicionar', function() {
    return view('about.add');
});

Route::get('admin/sobre/edita', [ControllerSobre::class, 'editSobre']);

Route::post('admin/sobre/update/', [ControllerSobre::class, 'updateSobre']);

Route::get('admin/sobre/delete', [ControllerSobre::class, 'deleteSobre']);