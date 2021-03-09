<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
	protected $modelo = 'modelo';

    public function categoria() 
    {
    	return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}
