<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return response()->json($product, 200);
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name_type = $request->name_type;
        $product->name_content = $request->name_content;
        // $product->content = $request->content;
        //save Foto Content
        $image = array();
        if ($request->hasFile('content')) {
            $request->validate([
                'content' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $request->file('content')->move('fotoProduct/', $request->file('content')->getClientOriginalName());
            $product->content = $request->file('content')->getClientOriginalName();
            $image[] = $product->content;
        }
        $product->save();
        return response()->json([
            'message' => 'Product has been uploaded',
            'data' => $product,
        ]);
    }
}
