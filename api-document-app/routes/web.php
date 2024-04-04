<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkspaceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ForgetPasswordController;




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


Route::group(['middleware' => 'guest'],function(){

    Route::get('/register',[AuthController::class,'register'])->name('register.index');
    Route::post('/register',[AuthController::class,'registerPost'])->name('register');

    Route::get('/login',[AuthController::class,'login'])->name('login.index');
    Route::post('/login',[AuthController::class,'loginPost'])->name('login');

 
});
   Route::get('/reset-password/{token}',[ForgetPasswordController::class,'ResetPassword'])
    ->name('reset.password');
    Route::get('/forget-password',[ForgetPasswordController::class,'ForgetPassword'])->name('ForgetPassword');
    Route::post('/forget-password',[ForgetPasswordController::class,'ForgetPasswordPost'])->name('ForgetPassword.post');
    Route::post("/reset-password",[ForgetPasswordController::class,'resetPasswordPost'])
    ->name('reset.password.post');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/', [HomepageController::class, 'index'])->name('home.index');
    Route::resource('home',HomepageController::class);
    Route::resource('workspace',WorkspaceController::class);
    Route::get('/workspace/{workspace}/add-collection', [WorkspaceController::class, 'add_collection'])->name('workspace.add_collection');
    Route::get('/workspace/{workspace}/add-file', [WorkspaceController::class, 'add_file'])->name('workspace.add_file');
    Route::get('/workspace/{workspace}', [WorkspaceController::class, 'index'])->name('workspace.index');

    Route::delete('/logout',[AuthController::class,'logout'])->name('logout');
});


