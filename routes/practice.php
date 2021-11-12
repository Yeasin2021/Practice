
<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerifyController;
use App\Http\Controllers\Map\GoogleMapController;
use App\Http\Controllers\Seeder\PracticeSeederController;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Route;


    Route::get('data-table',[PracticeSeederController::class,'dataShow'])->name('data-table');
    Route::get('google-map',[GoogleMapController::class,'index'])->name('google-map');



    Route::get('/register-form',[RegisterController::class,'registerForm'])->name('register-form');
    Route::get('/login-form',[LoginController::class,'loginForm'])->name('login-form');
    Route::get('/verify-form',[VerifyController::class,'verifyForm'])->name('verify-form');
    Route::post('/register',[RegisterController::class,'register'])->name('register');
    Route::post('/login',[LoginController::class,'login'])->name('login');
    Route::post('/verify',[VerifyController::class,'verify'])->name('verify');
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
    

    






?>
