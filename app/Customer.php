<?php

namespace App;
use \App\User as UserEloquent;
use \App\Member as MemberEloquent;
use \App\Order as OrderEloquent;
use \App\Restaurant as RestaurantEloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{
    use Notifiable;
    protected $table = 'customers';
    public function order()
    {
        return $this->hasMany(OrderEloquent::class);
    }
    public function member(){
        return $this->belongsTo(MemberEloquent::class);
    }

    public function Restaurant(){
        return $this->belongsTo(RestaurantEloquent::class);
    }
}