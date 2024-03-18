<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkspaceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;




Route::resource('reset-password',ResetPasswordController::class);


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them willphp
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/changeNewPassword', function () {
    return view('change-new-password');
});

Route::group(['middleware' => 'guest'],function(){

    Route::get('/register',[AuthController::class,'register'])->name('register');
    Route::post('/register',[AuthController::class,'registerPost'])->name('register');

    Route::get('/login',[AuthController::class,'login'])->name('login');
    Route::post('/login',[AuthController::class,'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'],function(){
    Route::get('/', [HomepageController::class, 'index'])->name('home.index');
    Route::resource('home',HomepageController::class);
    Route::resource('workspace',WorkspaceController::class);
    Route::get('/workspace/{workspace}/add-collection', [WorkspaceController::class, 'add_collection'])->name('workspace.add_collection');
    Route::delete('/logout',[AuthController::class,'logout'])->name('logout');
});


