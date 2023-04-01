<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard(){
        return view("admin/dashboard");
}
function login(){
    return view("admin/login");
}
function forgot(){
    return view("admin/forgot-password");
}

}
