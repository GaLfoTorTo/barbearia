<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
	protected $categoria = 'categoria';
	
	public function modelos()
	{
		return $this->hasMany(modelo::class, 'modelo_id');
	}    
}
