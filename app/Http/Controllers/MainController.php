<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function home(){
            return view("client/home");
    }
    
    function blog(){
        return view("client/blog");
    }

    function contact(){
        return view("client/contact");
    }

    function shop(){
        return view("client/shop");
    }

    function fillter(){
        return view("client/shop-fillter");
    }
}
