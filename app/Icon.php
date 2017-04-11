<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class Icon extends Model
{
    //
    public static function geticon(){
      if(Auth::check()){
        return static::selectRaw('icon_src')
          ->where('icon_id', '1')
          ->get();
      }else{
        return null;
      }
    }
}
