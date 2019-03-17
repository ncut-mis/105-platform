<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Customer as CustomerEloquent ;
use App\User as UserEloquent;
use App\Order as OrderEloquent;
use App\Detail as DetailEloquent;
use App\Meal as MealEloquent;
use App\MealType as MealTypeEloquent;
use App\Restaurant as RestaurantTypeEloquent;
use \App\Member as MemberEloquent;

class MemberController extends Controller
{

    public function index()
    {

        $orders=Auth::user()->customer()->order;
        $data=['$order'=>$orders];

        return view('order',$data);
    }
    public function index1()
    {
        $customers=Auth::user()->customer;
        $data=['$order'=>$customers];

        return view('order',$data);
    }
}
