<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrdersController extends Controller
{
     function index(){
        $list = DB::table('orders')->orderBy('created_at', 'desc')->Paginate(20);
        $customers = DB::table('users')->select('name', 'id')->get();

        $data = ['list' => $list, 'customers' => $customers];
        return view("admin.order.index", $data);
    }
    function detail($id){
        $list = DB::table('order_details')->where('order_id', $id)->get();
        $pd_list = DB::table('products')->select('name', 'id')->get();
        $data = ['list' => $list, 'pd_list' => $pd_list];
        return view("admin.order.detail", $data);
    }
}
