<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('front.index', compact('products'));
    }

    public function products()
    {
        $products = Product::all();
        return view('front.products', compact('products'));
    }

    public function contact()
    {
        return view('front.contact');
    }


    public function aboutus()
    {
        return view('front.aboutus');
    }

    public function singleproduct($id)
    {
        $products = Product::find($id);
        return view('front.single-product', compact('products'));
    }

    public function checkout()
    {
        return view('front.checkout');
    }

    public function cart()
    {
        return view('front.cart');
    }

    public function confirmation()
    {
        return view('front.confirmation');
    }


    public function singleblog()
    {
        return view('front.single-blog');
    }

    public function login()
    {
        return view('front.login');
    }
    public function blog()
    {
        return view('front.blog');
    }

    public function tracking()
    {
        return view('front.tracking');
    }
    public function elements()
    {
        return view('front.elements');
    }
}
