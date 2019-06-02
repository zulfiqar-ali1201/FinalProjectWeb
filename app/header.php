<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class header extends Model
{
    public $table = "headers";
    //
    protected $fillable=['title','slogan','logo'];
}
