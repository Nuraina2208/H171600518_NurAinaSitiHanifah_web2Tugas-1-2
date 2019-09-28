<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
     protected $table='Artikel';

    	protected $fillable=['nama','user_id'];
    	
    	protected $casts=[];
}
