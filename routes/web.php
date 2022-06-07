<?php

use App\Http\Controllers\BuildingController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\InstallmentController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LandlordController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\UnitController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('building', BuildingController::class);
Route::resource('contract', ContractController::class);
Route::resource('installment', InstallmentController::class);
Route::resource('invoice', InvoiceController::class);
Route::resource('landlord', LandlordController::class);
Route::resource('receipt', ReceiptController::class);
Route::resource('tenant', TenantController::class);
Route::resource('unit', UnitController::class);
