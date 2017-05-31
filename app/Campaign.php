<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    public $table = "campaign";
    //
         public function user_profile()
    {
        return $this->hasOne('users');
    }
}
