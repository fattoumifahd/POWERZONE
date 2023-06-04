<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResponsableController;
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

// Route::get('/',function () {
//     return view('welcome');
// });

Route::get('/',[LoginController::class,'show'])->name('login.show');
Route::post ('/login',[LoginController::class,'login'])->name('login');

Route::middleware('auth_Respo')->group(function(){
Route::get ('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/addClient', [ClientController::class,'create'])->name('addClient');
Route::post('/addClient', [ClientController::class,'store'])->name('add_Client');
Route::get('/clientA', [ClientController::class,'clientA'])->name('local.clientA');
Route::get('/clientP', [ClientController::class,'clientP'])->name('local.clientP');
});

Route::get('/home', [HomeController::class,'index'])->name('local.home');



Route::get('/listerResponsable', [ResponsableController::class,'index'])->name('listerResponsable');
Route::get('/addResponsable', [ResponsableController::class,'create'])->name('addResponsable');
Route::post('/addResponsable', [ResponsableController::class,'store'])->name('add_Responsable');


