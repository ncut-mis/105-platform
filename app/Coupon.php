<?php

namespace App;

use \App\Restaurant as RestaurantEloquent;
use \App\Member_coupons as Member_couponsEloquent;
use Illuminate\Database\Eloquent\Model;



class Coupon extends Model
{
    public function restaurant(){
        return $this->belongsTo(RestaurantEloquent::class);
    }
    public function member_coupon(){
        return $this->hasMany(Member_couponsEloquent::class);
    }
}
