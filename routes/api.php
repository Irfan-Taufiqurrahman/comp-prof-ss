<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/product/store', [ProductController::class, 'store']);
Route::get('/product', [ProductController::class, 'indexs']);
// Route::post('/login', [AuthController::class, 'login'])->name('Components.login');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
