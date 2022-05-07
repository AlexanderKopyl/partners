<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// routes/api.php
Route::controller(AuthController::class)->middleware('locale')->group(function () {
    Route::post('/login', 'login');
    Route::post('/me', 'me')->middleware('auth:sanctum');
    Route::post('/register', 'register')
        ->middleware('auth:sanctum')
        ->middleware('admin');
    Route::get('/error', 'errorAuth')->name('error_auth');
});


