<?php

use App\Http\Controllers\UploadFileController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/kontakt',function(){
    return view('pages.kontakt');
});
Route::get('/oferta',function(){
    return view('pages.oferta');
});
Route::get('/polityka-prywatnosci',function(){
    return view('pages.polityka');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('api');
