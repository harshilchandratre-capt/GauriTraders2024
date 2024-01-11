<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SaleReturnController;
use App\Http\Controllers\PointOfSaleController;


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

// Route::get('/', function () {
//     return view('home');
// });



Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/sale-return', [SaleReturnController::class, 'saleReturn'])->name('sale-return');
Route::get('/point-of-sale', [PointOfSaleController::class, 'pointofSale'])->name('point-of-sale');


