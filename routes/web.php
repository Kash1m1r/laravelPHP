<?php

use App\Http\Controllers\FrutasController;
use App\Http\Controllers\LinguagemController;
use App\Http\Controllers\SerieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', [SerieController::class, 'index']);
Route::get('/series/criar', [SerieController::class, 'create']);
Route::get('/linguagens', [LinguagemController::class, 'index']);
Route::get('/linguagens/criar', [LinguagemController::class, 'create']);
Route::get('/fruta',[FrutasController::class, 'index']);
Route::get('/fruta/criar',[FrutasController::class, 'create']);