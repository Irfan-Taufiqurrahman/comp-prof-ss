<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        // dd(Auth::user());
        if (Auth::check()) {
            $products = Product::all();
            return view('Dashboard.product.product', compact('products'));
        }

        // return response()->json($product, 200);
    }

    public function create()
    {
        return view('Dashboard.product.create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $product = new Product();
            $product->name_type = $request->name_type;
            $product->title_content = $request->title_content;

            // Save Foto Content
            $image = array();
            if ($request->hasFile('content')) {
                $request->validate([
                    'content' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $request->file('content')->move('fotoProduct/', $request->file('content')->getClientOriginalName());
                $product->content = $request->file('content')->getClientOriginalName();
                $image[] = $product->content;
            }

            DB::commit();
            $product->save();

            return redirect()->route('Dashboard.product.product')->with('success', 'Product berhasil ditambahkan');
        } catch (\Throwable $th) {
            DB::rollback();
            // Handle the exception or display an error message
            return redirect()->back()->with('error', 'Failed to add the product.');
        }
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
