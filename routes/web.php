<?php

use App\Http\Controllers\CustomerController;
use App\Models\CustomerModel;
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
Route::get('/customer',[CustomerController::class,'getAllInfo']);
Route::get('/customer/create', function () {
    return view('create');
});
Route::post('/customer/create',[CustomerController::class, 'insertInfo']);;
Route::get('/customer',[CustomerController::class,'index']); 