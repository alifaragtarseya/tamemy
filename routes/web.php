<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
use App\Http\Controllers\HomeController;
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
// Language Route
Route::get('lang', [LangController::class,'index'])->name('lang.index');


Route::get('/', [HomeController::class,'index'])->name('home.index');
Route::get('/contact', [HomeController::class,'contact'])->name('home.contact');
