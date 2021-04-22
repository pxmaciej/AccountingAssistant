<?php

use App\Http\Controllers\TestingController;
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
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);
    Route::post('register', [App\Http\Controllers\AuthController::class, 'register']);
    Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout']);
    Route::post('refresh', [App\Http\Controllers\AuthController::class, 'refresh']);
    Route::post('profile', [App\Http\Controllers\AuthController::class, 'userProfile']);
});
Route::group([

    'middleware' => 'api',
    'prefix' => 'file'

], function ($router) {
    Route::post('store', [App\Http\Controllers\UploadFileController::class, 'store']);
    Route::get('show/{user_id}', [App\Http\Controllers\UploadFileController::class, 'show']);
    Route::post('update', [App\Http\Controllers\UploadFileController::class, 'update']);
    Route::delete('destroy/{file_id}', [App\Http\Controllers\UploadFileController::class, 'destroy']);
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'expense'

], function ($router) {
    Route::post('store', [App\Http\Controllers\ExpenseController::class, 'store']);
    Route::get('show/{user_id}', [App\Http\Controllers\ExpenseController::class, 'show']);
    Route::patch('update', [App\Http\Controllers\ExpenseController::class, 'update']);
    Route::delete('destroy/{expense_id}', [App\Http\Controllers\ExpenseController::class, 'destroy']);
});
