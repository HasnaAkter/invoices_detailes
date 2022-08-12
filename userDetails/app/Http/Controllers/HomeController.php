<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
//        return view('front.home.home', [
//            'products' => Product::orderBy('id', 'DESC')->where('status', 1)->take(6)->get(),
//        ]);
        return view('welcome');
    }
    public function shopPage()
    {
        return view('front.home.products');
    }
    public function productDetails($id)
    {
        return view('front.home.details', [
            'product' => Product::find($id),
        ]);
    }
}
