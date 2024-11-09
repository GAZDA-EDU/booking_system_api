<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Admin_loginController;
use App\Http\Controllers\Admin\BusinessController;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('admin')->group(function(){
    Route::get('index', [UserController::class, 'index'])->name('user');
    Route::post('store', [UserController::class, 'store'])->name('new_user');
    Route::get('create', [UserController::class, 'create'])->name('user.create');
    Route::get('user-delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
    Route::apiResource('business', BusinessController::class)->name('index', 'businesses');
});

Route::post('admin_login',[Admin_loginController::class, 'login'])->name('admin_login');
Route::get('showloginform',[Admin_loginController::class, 'showloginform'])->name('login_form');
Route::get('logout',[Admin_loginController::class, 'logout'])->name('logout');
