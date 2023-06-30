<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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
//     return view('welcome');
// });
        Route::middleware(['guest'])->group(function () {
            Route::get('/',[UserController::class,'index'])->name('/');
            Route::get('/register',[UserController::class,'showRegister'])->name('register');
            Route::post('/user/store',[UserController::class,'userStore'])->name('user.store');
            Route::post('/dashboard',[UserController::class,'checkLogin'])->name('check.login');
        });
        //authentication for user and dashboard
        // Route::middleware(['auth'])->group(function () {
                Route::get('/home',[AdminController::class,'index']);
                Route::get('/admin/dashboard',[AdminController::class,'getUser']);
                Route::get('delete/{id}',[AdminController::class,'userDelete']);
                Route::get('edit/{id}',[AdminController::class,'userEdit']);
                Route::post('update/{id}',[AdminController::class,'updateUser']);
                Route::get('/logout',[UserController::class,'userLogout'])->name('logout');
            // });