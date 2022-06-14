<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('login');
});
Route::view('home','home');

Route::get('/logout', function () {
    Session()->forget('user');
    return redirect('login');
});

Route::get('/',[ProductController::class,'index']);
Route::view('/register','register');
Route::get('detail/{id}',[ProductController::class,'detail']);
Route::post('/add_card',[ProductController::class,'AddToCard']);
Route::get('/cardList',[ProductController::class,'cardList']);
Route::post('register',[ProductController::class,'register']);
Route::get('/remove/{id}',[ProductController::class,'remove']);
Route::get('ordernow',[ProductController::class,'orderNow']);
Route::POST('/orderplace',[ProductController::class,'orderPlace']);
Route::get('myorder',[ProductController::class,'myOrder']);
Route::post('/login',[UserController::class,'login']);





