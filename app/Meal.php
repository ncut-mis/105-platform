<?php

namespace App;
use \App\Restaurant as RestaurantEloquent;
use \App\Item as ItemEloquent;
use \App\MealKeyword as MealKeywordEloquent;
use \App\Category as CategoryEloquent;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{

    protected $tables = 'meals';
    protected $fillable = [
        'restaurant_id','name', 'photo', 'ingredients','price',
    ];
    public function item(){
        return $this->hasMany(ItemEloquent::class);
    }
    public function restaurant(){
        return $this->belongsTo(RestaurantEloquent::class);
    }
    public function MealKeywords(){
        return $this->hasMany(MealKeywordEloquent::class);
    }
    public function Category(){
        return $this->belongsTo(CategoryEloquent::class);
    }

}
