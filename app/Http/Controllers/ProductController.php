<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function indexs()
    {
        $products = Product::all();
        // return view('Dashboard.product.product', compact('products'));
        return response()->json($products, 200);
    }

    public function index()
    {
        $products = Product::all();
        return view('Dashboard.product.product', compact('products'));
        // return response()->json($product, 200);
    }

    public function create()
    {
        return view('Dashboard.product.create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name_type = $request->name_type;
        $product->title_content = $request->title_content;
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

        return redirect()->route('Dashboard.product.product')->with('success', 'product berhasil ditambahkan');
        // return response()->json([
        //     'message' => 'Product has been uploaded',
        //     'data' => $product,
        // ]);
    }

    public function edit(Product $product)
    {
        return view('container.edit', compact('products'));
    }

    public function update(Request $request, Product $product)
    {
        $product = new Product();
        $product->name_type = $request->name_type;
        $product->title_content = $request->title_content;
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

        return redirect()->route('Dashboard.product.product')->with('success', 'product berhasil diedit');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('Dashboard.product.product')
            ->with('success', 'Container deleted successfully.');
    }
}
