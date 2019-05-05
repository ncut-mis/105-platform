<?php

namespace App\Http\Controllers;
use Auth;
use App\Member;

class MemberController extends Controller
{

    public function index()
    {

        $orders=Auth::user()->order;
        $data=['$order'=>$orders];

        return view('history',$data);
    }
    public function VerificationCodeSave()
    {

        $str = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.-+=_,!@$#*%<>[]{}";

        /**從裡面隨機挑出字串**/
        $verification_code = substr(str_shuffle($str), 0, 6);
        $member=Member::find(Auth::user()->id);
        $member->verification_code=$verification_code;
        $member->save();

        return redirect()->route('member.QRCode');

    }
    public function QR()
    {
        return view('qrcode');
    }
    public function scan()
    {
        return view('scanning');
    }
    public function person()
    {
        return view('personal');
    }
}
