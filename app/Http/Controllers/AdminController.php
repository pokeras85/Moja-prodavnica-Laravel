<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function orders()
    {
        $orders = Order::all();

        $orders->transform(function ($order, $key){
            $order->cart=unserialize($order->cart);
            return $order;
        });


        return view('admin.orders')->with('orders', $orders);;
    }
}
