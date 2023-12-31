<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Promo;
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
        $categories = Category::all();
        $promos = Promo::all();
        return view('back.product.create', compact('categories','promos'));
    }

    public function store(Request $request)
    {


        $data = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'foto' => 'temp',
        ]);



        if($request->hasFile('foto')) {
            $request->file('foto')->move('fotoproduct/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        Product::find($data->id)->promos()->attach($request->promo_id);

        return redirect()->route('product.index');
    }

    public function edit($id)
    {

        $product = Product::find($id);
        $categories = Category::all();
        return view('back.product.edit', compact('product', 'categories'));
    }


    public function update(Request $request, $id) {

        $product = Product::find($id);
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->description = $request->description;


         if($request->hasFile('foto')) {
            $request->file('foto')->move('fotoproduct/', $request->file('foto')->getClientOriginalName());
            $product->foto = $request->file('foto')->getClientOriginalName();

        }
        $product->save();

        return redirect()->route('product.index');
    }


    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('product.index');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $results = Product::where('column', 'LIKE', '%' . $query . '%')->get();

        return view('search-results', compact('results'));
    }


}
