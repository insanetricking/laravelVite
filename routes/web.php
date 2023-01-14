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

Route::middleware('guest')->group(function () {
    Route::get('/login', [IndexController::class, 'login'])->name('auth.login');
    Route::post('/login', [IndexController::class, 'authorization'])->name('auth.login');
    Route::get('/register', [IndexController::class, 'register'])->name('auth.register');
    Route::post('/register', [IndexController::class, 'registration'])->name('auth.register');
});






Route::middleware('auth')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('home');
    Route::get('/logout', [IndexController::class, 'logout'])->name('auth.logout');
    Route::get('/profile', [IndexController::class, 'index'])->name('profile');
});


Route::get('/test', [IndexController::class, 'index']);




// Route::middleware("r")->group(function(){

// });


// Route::prefix("news")->group(function(){
//     Route::get('/', [IndexController::class, 'index'])->name('home');
// });
