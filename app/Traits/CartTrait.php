<?php

namespace App\Traits;

use App\Models\UserCart;
use Auth;

trait CartTrait
{
    public static function cartCount(){
       return  Auth::check() ?  UserCart::query()->where('user_id', Auth::user()->id)->count() : null;

    }
}
