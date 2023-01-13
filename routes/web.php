<?php

use App\Http\Controllers\IndexController;
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
Route::get('/test', [IndexController::class, 'index']);



Route::get('/', [IndexController::class, 'php'])->name('home');

Route::post('/register', [IndexController::class, 'register'])->name('register');

Route::get('/profile/{id}', [IndexController::class, 'profile'])->name('profile');
// Route::middleware("r")->group(function(){

// });


// Route::prefix("news")->group(function(){
//     Route::get('/', [IndexController::class, 'index'])->name('home');
// });


