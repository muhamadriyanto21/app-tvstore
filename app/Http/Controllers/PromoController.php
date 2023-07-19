<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index()
    {
        $promos = Promo::all();
        return view('back.promo.index', compact('promos'));
    }

    public function create()
    {
        return view('back.promo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        Promo::create($request->all());

        return redirect()->route('promo.index');
    }

    public function show(Promo $promo)
    {
        $promo = Promo::all();
        return view('back.promo.show', compact('promo'));
    }

    public function edit($id)
    {
        $promo = Promo::find($id);
        return view('back.promo.edit', compact('promo'));
    }

    public function update(Request $request, $id)
    {
        Promo::where('id', $id)->update([
            'name' => $request->name,
           'description' => $request->description,
           'description' => $request->description,
           'start_date' => $request->start_date,
           'end_date' => $request->end_date,
         ]);
        return redirect()->route('promo.index');
    }

    public function destroy($id)
    {
        $promo = Promo::find($id);
        $promo->delete();

        return redirect()->route('promo.index');
    }
}
