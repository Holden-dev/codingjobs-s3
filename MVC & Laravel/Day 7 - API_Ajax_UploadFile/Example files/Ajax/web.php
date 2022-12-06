<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureIsAdmin;
use App\Models\Flower;
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

// Default
Route::get('/', function () {
    return view('welcome');
});

// Custom routes
Route::get('/flowers', [FlowerController::class, 'index']);

Route::get('/flowers/create', [FlowerController::class, 'create'])->middleware('admin');

Route::post('/flowers/create', [FlowerController::class, 'insert'])->middleware('admin');
Route::get('/flowers/{id}', [FlowerController::class, 'show'])->name('flower.details');
Route::get('/flowers/update/{id}', [FlowerController::class, 'edit'])->middleware('admin');
Route::put('/flowers/update/{id}', [FlowerController::class, 'update'])->middleware('admin');
Route::delete('/flowers/delete/{id}', [FlowerController::class, 'destroy'])->middleware('admin');

Route::get('/register', [UserController::class, 'create']);
Route::post('/register', [UserController::class, 'store']);

Route::get('/login', [UserController::class, 'login_form']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/api/flowers', [APIController::class, 'index'])->name('api_flowers');

Route::get('/api/flowers/minprice={minprice}&maxprice={maxprice}', [APIController::class, 'filter_by_price']);

Route::get('/api/flowers/minprice={price}', [APIController::class, 'filter_by_min_price']);

Route::get('/api/flowers/maxprice={price}', [APIController::class, 'filter_by_max_price']);

Route::get('/api/flowers/name={name}', [APIController::class, 'filter_by_name']);

// Example of using AJAX
Route::get('/ajax-form', [FlowerController::class, 'ajax_form']);

// Example on how to upload a file :
Route::get('/upload-file', [FlowerController::class, 'upload_file']);
Route::post('/upload-file', [FlowerController::class, 'upload_file_submit']);









// Route::get('/test', function () {
//     if (session('email'))
//         return 'You are loggued in';
//     else
//         return 'you are NOT loggued in';
// });
