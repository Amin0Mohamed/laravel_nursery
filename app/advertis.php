<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class advertis extends Model
{
    protected $fillable=['ownerID','image','title','content','url','u_id'];
}
