<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();

        return view('back.product.index', compact('data'));
    }

    public function create()
    {
        return view('back.product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            // tambahkan validasi lain yang diperlukan
        ]);

        $data = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'foto' => 'foto.jpg',
        ]);
        if($request->hasFile('foto')) {
            $request->file('foto')->move('fotoproduct/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('back.product.edit', compact('product'));
    }


    public function update(Request $request, $id) {
        Product::where('id', $id)->update([
            'name' => $request->name,
           'price' => $request->price,
           'description' => $request->description,
         ]);
        return redirect()->route('product.index');
    }


    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('product.index');
    }


}
