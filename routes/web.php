<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/stock', [StockController::class, 'index']);
Route::post('/stock/create', [StockController::class, 'create']);
// Route::get('/stock/', function(){
//     return view('stock.list');
// });
Route::get('/stock/add', function(){
    return view('stock.add');
});
// Route::get('/stock/edit/', function(){
//     return view('stock.edit');
// });
Route::get('/stock/edit/{id}', [StockController::class, 'edit']);




