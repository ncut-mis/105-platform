<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

use App\Meal as Meal;

use App\Restaurant;

class RestaurantController extends Controller
{

    public function index()
    {
        $restaurants=null;
        return view('search', [
            'restaurants' =>$restaurants,
        ]);

    }
    public function searchp(Request $request)
    {

        $restaurants =Restaurant::where('name','like',"%".$request->booksearch."%")->get();

        return View('search',['restaurants'=>$restaurants]);

    }

    public function home($id)
    {
        $meal=Meal::where('restaurant_id',$id)->get();

        $restaurant=Restaurant::find($id);
        $data=['meals'=>$meal]+['restaurant'=>$restaurant];


        return view('restaurant',$data);
    }

    public function search(Request $request)
    {
        $restaurants = Restaurant::orderBy('id','ASC')
            ->where('name','like',"%".$request->booksearch."%")
            ->get();
        $data = ['restaurants'=>$restaurants];
        return View('restaurant_main',$data);

    }
}
