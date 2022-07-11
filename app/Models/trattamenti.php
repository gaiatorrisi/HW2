<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class trattamenti extends Model
{ 
    protected $table= "trattamenti";

    public $timestamps = false;
    protected $primaryKey= "intestazione";
    protected $autoIncrement = false;
    protected $keyType = "string";
    
}