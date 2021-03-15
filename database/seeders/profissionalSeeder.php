<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class profissionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('profissionals')->get()->count() == 0){

    		DB::table('profissionals')->insert([
	        	[
		        	'nome' => 'Berenilso',
		        	'cargo' => 'barbeiro',
		        	'foto' => '/img/barbeiro.jpg',
	        	],
	        	[
		        	'nome' => 'Fransisglauso',
		        	'cargo' => 'cabeleireiro',
		        	'foto' => '/img/cabeleireiro.jpg',
	        	],
	        	[
		        	'nome' => 'Regirvalsu',
		        	'cargo' => 'finalizador',
		        	'foto' => '/img/finalizador.jpg',
	        	]
        	]);
    	}
	}
}

