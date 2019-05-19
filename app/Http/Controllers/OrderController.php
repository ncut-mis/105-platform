<?php

namespace App\Http\Controllers;
use App\Member_coupons;
use App\Order;
use Auth;
use App\Customer;
use App\Item;
use phpDocumentor\Reflection\Types\Compound;
use DB;

class OrderController extends Controller
{

    public function index()
    {
        $customers=Order::join('customers','customers.id','=','orders.customer_id')

            ->select('orders.id','orders.total','orders.StartTime')
            ->where('customers.member_id',Auth::user()->id)
            ->get();

        $items =Item::all();

        $coupons = Member_coupons::where('member_id',Auth::user()->id)->get();

        $data = ['customers'=>$customers,'items'=>$items,'coupons'=>$coupons];

        return view('history',$data);

    }
    public function item($id)
    {
        $customers=Order::join('customers','customers.id','=','orders.customer_id')
            ->select('orders.id','orders.total','orders.StartTime')
            ->where('customers.member_id',Auth::user()->id)
            ->get();

        $coupons = Member_coupons::where('member_id',Auth::user()->id)->get();

        $item = Item::join('meals','items.meal_id','=','meals.id')
            ->where('order_id',$id)
            ->get();

        $order=Order::find($id);

        $data = ['customers'=>$customers,'items'=>$item,'coupons'=>$coupons,'orders'=>$order];

        return view('items', $data);

    }



}
