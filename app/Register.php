<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $primaryKey='rid';
    protected $fillable=['ownerID','rid','sName','sAge','sNationality','fName','fWork','fMobile','mName','mWork','mMobile','nName','nMobile','Address','Status','rDate'];
}
