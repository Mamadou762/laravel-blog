<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('author')->name('author.')->group(function () {

    Route::middleware(['guest:web'])->group(function () {
        Route::view('login/', 'admin/pages/auth/login')->name('login');
        Route::view('register/', 'admin/pages/auth/register')->name('register');
        Route::view('forgot-password/', 'admin/pages/auth/forgot-password')->name('forgot-password');
    });

    Route::middleware([])->group(function () {
       Route::get('home/', [AuthorController::class, 'index'])->name('home-page');
    });

});
