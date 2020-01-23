<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    Protected $fillable = ['full_name','image','country','brief','major_id','user_id'];
}
