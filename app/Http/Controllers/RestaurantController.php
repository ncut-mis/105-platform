<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Customer as CustomerEloquent;
use App\User as UserEloquent;
use App\Order as OrderEloquent;
use App\Detail as DetailEloquent;
use App\Meal as MealEloquent;
use App\MealType as MealTypeEloquent;
use App\Restaurant as RestaurantTypeEloquent;

class RestaurantController extends Controller
{

    public function index()
    {
        $restaurants=null;
        return view('search', [
            'restaurants' =>$restaurants,
        ]);

    }
    public function search(Request $request)
    {

        $restaurants =RestaurantTypeEloquent::where('name','like',"%".$request->booksearch."%")->get();

        return View('search',['restaurants'=>$restaurants]);

    }

    public function home($id)
    {
        $meal=MealEloquent::where('restaurant_id',$id)->get();

        $restaurant=RestaurantTypeEloquent::find($id);
        $data=['meals'=>$meal]+['restaurant'=>$restaurant];


        return view('restaurant',$data);
    }
}
