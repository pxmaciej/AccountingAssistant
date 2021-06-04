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

    Route::get('users', [App\Http\Controllers\AuthController::class, 'allUserProfile'])->middleware('roles:admin');
    Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);
    Route::post('checkToken', [App\Http\Controllers\AuthController::class, 'checkToken']);
    Route::post('register', [App\Http\Controllers\AuthController::class, 'register']);
    Route::patch('update', [App\Http\Controllers\AuthController::class, 'update']);
    Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout']);
    Route::post('refresh', [App\Http\Controllers\AuthController::class, 'refresh']);
    Route::get('profile', [App\Http\Controllers\AuthController::class, 'userProfile']);
    Route::delete('destroy/{user_id}', [App\Http\Controllers\AuthController::class, 'destroy']);
});
Route::group([

    'middleware' => 'api',
    'prefix' => 'file'

], function ($router) {
    Route::get('index', [App\Http\Controllers\UploadFileController::class, 'index'])->middleware('roles:admin');
    Route::post('store', [App\Http\Controllers\UploadFileController::class, 'store']);
    Route::get('show/{user_id}', [App\Http\Controllers\UploadFileController::class, 'show']);
    Route::post('update', [App\Http\Controllers\UploadFileController::class, 'update']);
    Route::delete('destroy/{file_id}', [App\Http\Controllers\UploadFileController::class, 'destroy']);
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'expense'

], function ($router) {
    Route::get('index', [App\Http\Controllers\ExpenseController::class, 'index'])->middleware('roles:admin');
    Route::post('store', [App\Http\Controllers\ExpenseController::class, 'store']);
    Route::get('show/{user_id}', [App\Http\Controllers\ExpenseController::class, 'show']);
    Route::patch('update', [App\Http\Controllers\ExpenseController::class, 'update']);
    Route::delete('destroy/{expense_id}', [App\Http\Controllers\ExpenseController::class, 'destroy']);
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'income'

], function ($router) {
    Route::get('index', [App\Http\Controllers\IncomeController::class, 'index'])->middleware('roles:admin');
    Route::post('store', [App\Http\Controllers\IncomeController::class, 'store']);
    Route::get('show/{user_id}', [App\Http\Controllers\IncomeController::class, 'show']);
    Route::patch('update', [App\Http\Controllers\IncomeController::class, 'update']);
    Route::delete('destroy/{expense_id}', [App\Http\Controllers\IncomeController::class, 'destroy']);
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'payment'

], function ($router) {
    Route::get('index', [App\Http\Controllers\PaymentController::class, 'index'])->middleware('roles:admin');
    Route::post('store', [App\Http\Controllers\PaymentController::class, 'store'])->middleware('roles:admin');
    Route::get('show/{user_id}', [App\Http\Controllers\PaymentController::class, 'show']);
    Route::patch('update', [App\Http\Controllers\PaymentController::class, 'update'])->middleware('roles:admin');
    Route::delete('destroy/{payment_id}', [App\Http\Controllers\PaymentController::class, 'destroy'])->middleware('roles:admin');
});
