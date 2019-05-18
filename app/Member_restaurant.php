<?php

namespace App;
use \App\Restaurant as RestaurantEloquent;
use \App\Member as MemberEloquent;
use Illuminate\Database\Eloquent\Model;

class Member_restaurant extends Model
{
    protected $tables = 'member_restaurants';
    protected $fillable = [
        'restaurant_id','member_id', 'status',
    ];
    public function member(){
        return $this->belongsTo( MemberEloquent::class);
    }
    public function restaurant(){
        return $this->belongsTo(RestaurantEloquent::class);
    }

}
