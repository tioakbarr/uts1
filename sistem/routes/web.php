<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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
Route::post('base', [HomeController::class, 'showBeranda']);
Route::get('base', [HomeController::class, 'showBase']);
Route::get('blog', [HomeController::class, 'showBlog']);
Route::get('loginadmin', [HomeController::class, 'showLoginadmin']);
Route::get('create', [HomeController::class, 'showcreate']);
Route::get('sign', [HomeController::class, 'showsign']);
Route::post('sign', [HomeController::class, 'loginProcess']);
Route::get('data', [HomeController::class, 'showData']);




Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'loginProccess']);
Route::post('admin', [AuthController::class, 'loginadmin']);



Route::post('user', [UserController::class, 'store']);
Route::get('user', [UserController::class, 'index']);
Route::get('user/create', [UserController::class, 'create']);
