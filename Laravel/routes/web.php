<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\lunaStoneController;

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

Route::match(['get', 'post'], '/', [lunaStoneController::class, 'index'])->name('welcome.index');

Route::match(['get', 'put'], '/signup', [lunaStoneController::class, 'signup'])->name('welcome.signup');

Route::match(['get', 'post'], '/login', [lunaStoneController::class, 'login'])->name('welcome.login');

Route::prefix('auth')->group(function () {
	Route::post('/Resister', [lunaStoneController::class, 'resister'])->name('auth.resister');
	Route::post('/authorization', [lunaStoneController::class, 'authorization'])->name('auth.auth');
});

Route::controller(lunaStoneController::class)->group(function () {
	Route::get('/user/mypage/{id}/{page?}', 'mypage')->where('id', 'userName')->name('mypage.home');
});