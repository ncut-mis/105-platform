<?php

namespace App;

use \App\Member as MemberEloquent;
use \App\Order as OrderEloquent;
use \App\Restaurant as RestaurantEloquent;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $table = 'customers';

    protected $fillable = [
        'id',
        'restaurant_id',
        'member_id',
        'status',
    ];
    public function order()
    {
        return $this->belongsTo(OrderEloquent::class);
    }
    public function member(){
        return $this->belongsTo(MemberEloquent::class);
    }

    public function Restaurant(){
        return $this->belongsTo(RestaurantEloquent::class);
    }
}