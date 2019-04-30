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
        $customers=Customer::where('member_id', Auth::user()->id)
            ->join('orders','orders.customer_id','=','customers.id')
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
