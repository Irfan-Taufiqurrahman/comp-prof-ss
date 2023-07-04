<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoadingController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [LoadingController::class, 'show']);
Route::get('/blog', [BlogController::class, 'show']);
Route::get('/product', [ProductController::class, 'index'])->name('Dashboard.product.product');
Route::get('/product/store', [ProductController::class, 'create'])->name('Dashboard.product.create');
Route::delete('/product/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::post('/product', [ProductController::class, 'store'])->name('Dashboard.product.store');


Route::get('/notfound', function () {
    return view('Components/pageError');
});
