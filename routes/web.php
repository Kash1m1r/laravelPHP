<?php

use App\Http\Controllers\SeriesController;
use App\Http\Controllers\RegistrarLinkController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TimesController;
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
    return redirect('/home');
});


Route::get('/home', [HomeController::class, 'index']);

/*
Route::controller(SeriesController::class)->group(function (){
    Route::get('/series', 'index')->name('series.index');
    Route::get('/series/create', 'create')->name('series.create');
    Route::post('/series/salvar', 'store')->name('series.store');
});
*/
Route::resource('/series', SeriesController::class)
    ->only(['index', 'create', 'store', 'destroy', 'edit']);


Route::controller(TimesController::class)->group(function(){
    Route::get('/times', [TimesController::class, 'index']);
    Route::get('/times/criar', [TimesController::class, 'create']);
    Route::post('/times/salvar', [TimesController::class, 'store']);
});










