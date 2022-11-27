<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\AutoresController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\EditorialesController;

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

Route::get('/', [LibrosController::class, 'welcome'] )->name('libros.welcome');





Auth::routes();

Route::get('/home', [LibrosController::class, 'welcome'] )->name('libros.welcome');

Route::group(['middleware'=>['auth']],function(){
    Route::resource("autores",AutoresController::class);
    Route::resource("categorias",CategoriasController::class);
    Route::resource("editoriales",EditorialesController::class);
});

