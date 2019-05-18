<?php

namespace App\Http\Controllers;
use Auth;
use App\Member;
use Illuminate\Http\Request;
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
        $member = Member::orderBy('id','ASC')
            ->where('id',Auth::user()->id)
            ->get();
        $data = ['member'=>$member];

        return view('personal',$data);
    }
    public function modi($id)
    {
        $member = Member::find($id);
        $data = ['member'=>$member];

        return view('modi',$data);
    }
    public function modiupdate(Request $request,$id)
    {
        $member = Member::find($id);
        $member->name=$request->name;
        $member->birthday=$request->birthday;
        $member->phone=$request->phone;
        $member->address=$request->address;
        $member->token=$request->token;
        $member->save();
        return redirect()->route('personal')->with('success','修改成功 !');
    }
}
