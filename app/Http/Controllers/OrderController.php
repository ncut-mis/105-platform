<?php

namespace App\Http\Controllers;
use Auth;


class OrderController extends Controller
{

    public function index()
    {
        $customers=Auth::user()->customer;
        $data=['customer'=>$customers,];

        return view('history',$data);

    }



}
