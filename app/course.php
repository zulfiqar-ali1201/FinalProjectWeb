<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    //
    protected $fillable=['title','titleimage', 'description', 'leads', 'duration', 'category', 'contents', 'outcomes', 'sort'];
}
