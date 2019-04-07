<?php

namespace App\Http\Controllers;
use Auth;
use App\Customer;

class OrderController extends Controller
{

    public function index()
    {
        $customers=Customer::where('member_id', Auth::user()->id)->get();
        return view('history',$customers);

    }



}
