<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $primaryKey='aid';
    protected $fillable = ['ownerID','aid','Detail','aSt','q_id'];
}
