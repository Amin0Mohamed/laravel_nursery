<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $primaryKey = 'sid';
    protected $fillable =['ownerID','sid','Name','Desc','Available'];
}
