<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FruitController;

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

Route::get('/products', [FruitController::class, 'index']);
Route::post('/products', [FruitController::class, 'update']);
Route::get('/products/search', [FruitController::class, 'search']);
Route::get('products/register', [FruitController::class, 'create']);
Route::post('products/register', [FruitController::class, 'store']);

Route::get('products/{id}', [FruitController::class, 'edit']);


