<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passwords extends Model
{
	public $timestamps = false;
   protected $fillable = [
        'password', 
    ];
    
protected $table = 'Passwords';
}
