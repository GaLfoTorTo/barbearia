<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class modelo extends Model
{
	//protected $modelo = 'modelos';

    public function categorias() 
    {
    	return $this->beLongsTo('categoria');
    }
}
