<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase_order extends Model
{
    // protected $fillable = [
	// 	'id','role',
	// ];

	protected $primaryKey = 'id';
	protected $table = 'purchase_order';

}
