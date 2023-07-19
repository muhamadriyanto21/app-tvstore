<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index()
    {
        $data = Banner::all();

        return view('back.banner.index', compact('data'));
    }

    public function create()
    {
        $categories = Banner::all();
        return view('back.banner.create', compact('categories'));
    }

    public function store(Request $request)
    {

        $data = Banner::create($request->all());
        if($request->hasFile('foto')) {
            $request->file('foto')->move('fotoproduct/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('banner.index');
    }

    public function edit($id)
    {

        $product = Banner::find($id);
        return view('back.banner.edit', compact('product'));
    }


    public function update(Request $request, $id) {

        $product = Banner::find($id);
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->description = $request->description;


         if($request->hasFile('foto')) {
            $request->file('foto')->move('fotoproduct/', $request->file('foto')->getClientOriginalName());
            $product->foto = $request->file('foto')->getClientOriginalName();

        }
        $product->save();

        return redirect()->route('banner.index');
    }


    public function destroy($id)
    {
        $product = Banner::find($id);
        $product->delete();

        return redirect()->route('banner.index');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $results = Banner::where('column', 'LIKE', '%' . $query . '%')->get();

        return view('search-results', compact('results'));
    }
}
