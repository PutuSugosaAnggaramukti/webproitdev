<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    protected $table = "dbkp";
    protected $fillable = ['id','name','service','email','whatsapp','kebutuhan','status'];

    
}
