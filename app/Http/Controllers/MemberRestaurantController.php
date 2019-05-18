<?php

namespace App\Http\Controllers;
use Auth;
use App\Member_restaurant;
use Illuminate\Http\Request;

class MemberRestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member_restaurants = Member_restaurant::join('restaurants','restaurants.id','=','member_restaurants.restaurant_id')
        ->where('member_restaurants.member_id',Auth::user()->id)
        ->get();
        $data = ['member_restaurants'=>$member_restaurants];
        return view('favorite',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member_restaurant  $member_restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Member_restaurant $member_restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member_restaurant  $member_restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Member_restaurant $member_restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member_restaurant  $member_restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member_restaurant $member_restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member_restaurant  $member_restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member_restaurant $member_restaurant)
    {
        //
    }
}
