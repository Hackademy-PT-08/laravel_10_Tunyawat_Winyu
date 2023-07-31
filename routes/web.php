<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AddNewPostController;

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

// Route Homepage
Route::get('/',[HomeController::class, 'index'])->name('homepage');

// Route Add New Post
Route::get('/aggiungi', [AddNewPostController::class, 'create'])->name('addnewpost');

Route::post('/aggiungi', [AddNewPostController::class, 'store']);
