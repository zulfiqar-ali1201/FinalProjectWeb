<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    //
    protected $fillable=['title','category','description', 'image', 'sort'];
}
