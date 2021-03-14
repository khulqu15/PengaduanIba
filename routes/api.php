<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\SocietyController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('complaint', ComplaintController::class);
Route::resource('response', ResponseController::class);
Route::resource('society', SocietyController::class);

Route::post('register', [AuthController::class, 'register']);
Route::post('private/login', [AuthController::class, 'loginUser']);
Route::post('general/login', [AuthController::class, 'loginSociety']);
