<?php

namespace App\Http\Controllers;
use Auth;


class MemberController extends Controller
{

    public function index()
    {

        $orders=Auth::user()->order;
        $data=['$order'=>$orders];

        return view('history',$data);
    }

}
