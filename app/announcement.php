<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class announcement extends Model
{
    //
    protected $fillable=['title','description','image','sort', 'announcedate'];
}
