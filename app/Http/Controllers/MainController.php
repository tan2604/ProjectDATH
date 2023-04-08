<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MainController extends Controller
{
    public function home(){
        $new_products = Product::latest()->limit(4)->get();
        return view("client.home",compact('new_products'));
    }

    // public function blog(){
    //     return view("client.blog");
    // }

    public function shop(){
        $products = Product::all();
        return view("client.shop",compact('products'));
    }

    public function product($slug){
        $product = Product::where('slug',$slug)->first();

        return view("client.product",compact('product'));
    }
    public function contact(){
        return view("client.contact");
    }

}
