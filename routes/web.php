<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MenuController;
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

Route::prefix('customer')->group(function() {
  Route::get('/index', [CustomerController::class, 'index']);
  Route::get('/create', [CustomerController::class, 'create']);
  Route::post('/store', [CustomerController::class, 'store']);
  Route::get('/edit/{id}', [CustomerController::class, 'edit']);
  Route::post('/update/{id}', [CustomerController::class, 'update']);
  Route::get('/destroy/{id}', [CustomerController::class, 'destroy']);
});

Route::prefix('menu')->group(function() {
  Route::get('/index', [MenuController::class, 'index']);
  Route::get('/create', [MenuController::class, 'create']);
  Route::post('/store', [MenuController::class, 'store']);
  Route::get('/edit/{id}', [MenuController::class, 'edit']);
  Route::post('/update/{id}', [MenuController::class, 'update']);
  Route::get('/destroy/{id}', [MenuController::class, 'destroy']);
});
