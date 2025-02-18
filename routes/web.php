<?php

use App\Models\data;
use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\VerificationController;

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


Route::get('/', function() {
    return view('Pages/Home');
});

Route::get('profile', function(){
    return view('Pages/Profile');
});

Route::get('Auth/register', [UserController::class, 'create'])->middleware('guest');

Route::get('Auth/login', [UserController::class, 'login'])->middleware('guest');

Route::post('user/Autentificate', [UserController::class, 'Autentificate'])->middleware('guest');

Route::post('/users', [UserController::class, 'store'])->middleware('guest');

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
