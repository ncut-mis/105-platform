<?php

namespace App\Http\Controllers;
use App\Member_restaurant;
use App\Post;
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

    public function home_1($id)
    {
        $meal=Meal::where('restaurant_id',$id)->get();
        $post=Post::where('restaurant_id',$id)->get();
        $restaurant=Restaurant::find($id);
        $memebr_restaurants = Member_restaurant::where('member_id',Auth::user()->id)
            ->where('restaurant_id',$id)->get();

        $data=['meals'=>$meal]+['restaurant'=>$restaurant]+['member_restaurants' =>$memebr_restaurants]+['posts'=>$post];
        return view('restaurant_1',$data);
    }

    public function home_2($id)
    {
        $meal=Meal::where('restaurant_id',$id)->get();
        $post=Post::where('restaurant_id',$id)->get();
        $restaurant=Restaurant::find($id);

        $data=['meals'=>$meal]+['restaurant'=>$restaurant]+['posts'=>$post];
        return view('restaurant_2',$data);
    }

    public function search_1(Request $request)
    {
        $restaurants = Restaurant::orderBy('id','ASC')
            ->where('name','like',"%".$request->booksearch."%")
            ->get();
        $data = ['restaurants'=>$restaurants];
        return View('restaurant_main_1',$data);
    }

    public function search_2(Request $request)
    {
        $restaurants = Restaurant::orderBy('id','ASC')
            ->where('name','like',"%".$request->booksearch."%")
            ->get();
        $data = ['restaurants'=>$restaurants];
        return View('restaurant_main_2',$data);
    }

    public function restaurant_subscribe(Request $request)
    {
        Member_restaurant::create([
            'member_id' => Auth::user()->id,
            'status' => 1,
            'restaurant_id' =>$request['restaurant_id'],
        ]);

        return redirect()->route('restaurant{id}.home',$request['restaurant_id']);
    }
    public function destroy($id)
    {
        Member_restaurant::destroy($id);
        return redirect()->back();
    }
}
