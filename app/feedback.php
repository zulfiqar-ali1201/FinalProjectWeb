<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    //
    protected $fillable=['name','qualification','message','number','email'];
}
