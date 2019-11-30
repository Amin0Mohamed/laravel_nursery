<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    protected $fillable = ['Uid','name','email','image','password','c_password','Authorize'];
}
