<?php


namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function home()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }

}

