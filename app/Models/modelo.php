<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class modelo extends Model
{
	protected $modelo = 'modelo';

    public function categorias() 
    {
    	return $this->beLongsTo(categoria::class, 'categoria_id');
    }
}
