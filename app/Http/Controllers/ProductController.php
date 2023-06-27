<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('back.dashboard', compact('products'));
    }

    public function create()
    {
        return view('back.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            // tambahkan validasi lain yang diperlukan
        ]);

        Product::create($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('back.edit', compact('product'));
    }


    public function update(Request $request, $id) {
        // dd($request);
        Product::where('id', $id)->update([
            'name' => $request->name,
           'price' => $request->price,
           'description' => $request->description,
         ]);
        return redirect()->route('dashboard.index');
    }


    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('dashboard.index')->with('success', 'Product deleted successfully.');
    }

    
}
