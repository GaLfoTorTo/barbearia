<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('categorias')->get()->count() == 0){

    		DB::table('categorias')->insert([
        	[
	        	'nome' => 'barba maquina',
	        	'preco' => '30.00',
	        	'tipo' => 'barba',
                'modelo_id' => 1
        	],
        	[
	        	'nome' => 'barba navalha',
	        	'preco' => '45.00',
	        	'tipo' => 'barba',
                'modelo_id' => 2
        	],
        	[
	        	'nome' => 'barba terapia',
	        	'preco' => '50.00',
	        	'tipo' => 'barba',
                'modelo_id' => 3
        	],
        	[
	        	'nome' => 'barba modelado',
	        	'preco' => '25.00',
	        	'tipo' => 'barba',
                'modelo_id' => 4
        	],
        	[
	        	'nome' => 'corte maquina',
	        	'preco' => '40.00',
	        	'tipo' => 'cabelo',
                'modelo_id' => 5
        	],
        	[
	        	'nome' => 'corte tesoura',
	        	'preco' => '45.00',
	        	'tipo' => 'cabelo',
                'modelo_id' => 6
        	],
        	[
	        	'nome' => 'degrade',
	        	'preco' => '40.00',
	        	'tipo' => 'cabelo',
                'modelo_id' => 7
        	],
        	[
	        	'nome' => 'coloracao',
	        	'preco' => '20.00',
	        	'tipo' => 'cabelo',
                'modelo_id' => 8
        	]

        ]);
        }
    }
}
