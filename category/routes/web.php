<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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
    return view('welcome');
});

Route::get('/addCategory', [PagesController::class, 'addCategory'])->name('addCategory');
Route::get('/addProduct', [PagesController::class, 'addProduct'])->name('addProduct');
Route::Post('/addCategorySubmit', [PagesController::class, 'addCategorySubmit'])->name('addCategorySubmit');
