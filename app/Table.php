<?php

namespace App;

use \App\Restaurant as RestaurantEloquent;
use Illuminate\Database\Eloquent\Model;
use \App\OrderTable as OrderTableEloquent;

class Table extends Model
{
    public function restaurant(){
        return $this->belongsTo(RestaurantEloquent::class);
    }
    public function OrderTable(){
        return $this->belongsTo(OrderTableEloquent::class);
    }
}
