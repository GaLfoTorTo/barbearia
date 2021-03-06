<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
	protected $categoria = 'categorias';
	
	public function modelos()
	{
		return $this->hasMany('modelo');
	}    
}
