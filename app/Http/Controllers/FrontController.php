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

    public function category()
    {
        return view('front.category');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function singleproduct()
    {
        return view('front.single-product');
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
