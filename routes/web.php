<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoadingController;
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

// Route::get('/', function () {
//     return view('index');
// });

// Route::middleware(['loading'])->group(function () {
//     Route::get('/loading', [IndexController::class, 'index'])->name('loading');

//     //main page route
//     Route::get('/', function () {
//         return view('index');
//     })->name('index');
// });

Route::get('/', [LoadingController::class, 'show']);

Route::get('/notfound', function () {
    return view('Components/pageError');
});
