<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    Protected $fillable = ['name','description','img1','img2','img3','img4','img5','user_id'];
}
