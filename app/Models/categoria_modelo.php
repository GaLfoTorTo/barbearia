<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria_modelo extends Model
{
    public function modelos()

	{
		return $this->hasMany('modelo');
	}

	public function categoria()
	{
		return $this->beLongsTo('categoria');
	} 
}
