<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ControllerSobre;
use App\Http\Controllers\ControllerInicio;
use App\Http\Controllers\ControllerServico;
use App\Http\Controllers\ControllerTestimonial;
use App\Http\Controllers\ControllerContato;


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
/*------------------------------views--------------------------------*/




Route::get('/', function () {
    return view('welcome');
});



Route::middleware(['auth'])->group(function () {




Route::get('/admin', function () {
    return view('admin.admin');
});


Route::get('/admin/sobre', function () {

    $dados = \App\Models\Sobre::get();
    return view('about.index')->with('dados', $dados);
});

Route::get('/admin/servicos', function () {
    $dados= App\Models\Servico::get();
    return view('servicos.index')->with('dados', $dados);
});

Route::get('/admin/depoimentos', function () {
    $dados= App\Models\Testimonial::get();
    return view('depoimentos.index')->with('dados', $dados);
});

Route::get('/admin/contato', function () {
    $dados= App\Models\Contato::get();
    return view('contact.index')->with('dados', $dados);
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

/*-------------------------Servicos----------------------------*/

Route::get('/admin/servicos/adicionar', function (){
    return view('servicos.add');
});

Route::post('/admin/servicos/salva',[ControllerServico::class,'salvaServico']);

Route::get('/admin/servicos/edita',[ControllerServico::class,'editaServico']);

Route::post('/admin/servicos/update',[ControllerServico::class,'updateServico']);

Route::get('/admin/servicos/delete',[ControllerServico::class,'deleteServico']);

/*-------------------------Testimonials----------------------------*/

Route::get('/admin/depoimentos/adicionar', function(){
    return view('depoimentos.add');
});

Route::post('/admin/depoimentos/salva',[ControllerTestimonial::class, 'salvaTestimonial']);

Route::get('/admin/depoimentos/edita',[ControllerTestimonial::class, 'editaTestimonial']);

Route::post('/admin/depoimentos/update',[ControllerTestimonial::class, 'updateTestimonial']);

Route::get('/admin/depoimentos/delete', [ControllerTestimonial::class, 'deleteTestimonial']);

/*-------------------------Contact----------------------------*/

Route::get('/admin/contato/adicionar', function(){
    return view('contact.add');
});

Route::post('/admin/contato/salva',[ControllerContato::class,'salvaContato']);

Route::get('/admin/contato/edita',[ControllerContato::class, 'editaContato']);

Route::post('/admin/contato/update',[ControllerContato::class, 'updateContato']);

Route::get('/admin/contato/delete',[ControllerContato::class, 'deleteContato']);



Route::get('/dashboard', function () {
    return view('dashboard');
 })->middleware(['auth'])->name('dashboard');
 
 
 });
 
 require __DIR__.'/auth.php';
 


 Route::get('/', function () {
    $dados = \App\Models\Sobre::get();
    $inicios = \App\Models\Inicio::get();
    $servicos = \App\Models\Servico::get();
    $testimonials= \App\Models\Testimonial::get();
    $contatos= \App\Models\Contato::get();
    return view('index')->with('dados', $dados)->with('inicios', $inicios)
    ->with('servicos', $servicos)->with('testimonials', $testimonials)
    ->with('contatos', $contatos);
});
