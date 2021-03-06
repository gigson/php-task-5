<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\NewsController;
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

//Route::get('/', function () {
//    return view('news.index');
//});

Route::get('/', [NewsController::class, 'index']);
Route::get('/article/{id}', [NewsController::class, 'show'])->name("show");
Route::get('/admin', [NewsController::class, 'create'])->name("create");
Route::post('/store', [NewsController::class, 'store'])->name("store");
Route::post('/postComment', [CommentsController::class, 'store'])->name("postComment");
