<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
   
    protected $table = 'preferences';
	public $timestamps = false;
	protected $primaryKey ='id';	

	 protected $fillable = [
    	'id',
        'preferences_name'
    ];

}
