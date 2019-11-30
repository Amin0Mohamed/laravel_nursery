<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $primaryKey = 'qid';
    protected $fillable = ['ownerID','qid','Detail','u_id','qSt','uid1'];
}
