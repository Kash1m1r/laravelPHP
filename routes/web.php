<?php

use App\Http\Controllers\SeriesController;
use App\Http\Controllers\RegistrarLinkController;
use App\Http\Controllers\HomeController;
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

Route::get('/home', [HomeController::class, 'index']);
Route::get('/series', [SeriesController::class, 'index']);
Route::get('/links', [RegistrarLinkController::class, 'index']);
Route::get('/series/criar', [SeriesController::class, 'create']);
Route::get('/links/criar', [RegistrarLinkController::class, 'create']);
Route::post('/series/salvar', [SeriesController::class, 'store']);
Route::post('/links/salvar', [RegistrarLinkController::class, 'store']);
