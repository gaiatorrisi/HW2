<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class regali extends Model
{ 
    protected $table= "regali";
    
    public $timestamps = false;
    protected $primaryKey= "tipologia";
    protected $autoIncrement = false;
    protected $keyType = "string";
    
}