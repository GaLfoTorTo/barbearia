<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	protected $categoria = 'categoria';
	
	public function modelos()
	{
		return $this->hasMany(Modelo::class);
	}    
}
