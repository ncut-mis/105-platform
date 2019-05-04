<?php

namespace App\Http\Controllers;
use App\Order;
use Auth;
use App\Customer;
use App\Item;

class OrderController extends Controller
{

    public function index()
    {
        $customers=Order::join('customers','customers.id','=','orders.customer_id')

            ->select('orders.id','orders.total','orders.StartTime')
            ->where('customers.member_id',Auth::user()->id)
            ->get();
        $data = ['customers'=>$customers];
        return view('history',$data);

    }
    public function item($id)
    {
        $item = Item::join('meals','items.meal_id','=','meals.id')
            ->where('order_id',$id)
            ->get();
        $data = ['items' => $item];
        return view('items', $data);

    }



}
