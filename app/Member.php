<?php

namespace App;
use \App\Customer as CustomerEloquent;
use \App\Member_coupons as Member_couponsEloquent;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Member extends Authenticatable
{
    use Notifiable;
    protected $table = 'members';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function customers(){
        return $this->hasMany(CustomerEloquent::class);
    }
    public function member_coupons(){
        return $this->hasMany(Member_couponsEloquent::class);
    }
}

