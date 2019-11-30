<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nursery extends Model
{
    protected $primaryKey ='Nur_id';
    protected $fillable =['Nur_id','ownerID','Nur_name','Address','Phone','Requirement','Status','Desc','image1','imageT1'];

}
