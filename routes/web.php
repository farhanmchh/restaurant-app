<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;

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

Route::get('/', [LoginController::class, 'showFormLogin'])->middleware('guest')->name('login');
Route::post('/',[LoginController::class, 'authenticate']);
Route::get('/dashboard', [LoginController::class, 'dashboard'])->middleware('auth');
Route::get('/signout', [LoginController::class, 'signOut'])->name('signout');
Route::resource('customer', CustomerController::class);
