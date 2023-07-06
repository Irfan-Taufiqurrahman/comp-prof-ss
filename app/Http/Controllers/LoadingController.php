<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class LoadingController extends Controller
{
    public function show()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }
}
