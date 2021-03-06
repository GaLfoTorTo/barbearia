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
	        	'tipo' => 'barba'
        	],
        	[
	        	'nome' => 'barba navalha',
	        	'preco' => '45.00',
	        	'tipo' => 'barba'
        	],
        	[
	        	'nome' => 'barba terapia',
	        	'preco' => '50.00',
	        	'tipo' => 'barba'
        	],
        	[
	        	'nome' => 'barba modelado',
	        	'preco' => '25.00',
	        	'tipo' => 'barba'
        	],
        	[
	        	'nome' => 'corte maquina',
	        	'preco' => '40.00',
	        	'tipo' => 'cabelo'
        	],
        	[
	        	'nome' => 'corte tesoura',
	        	'preco' => '45.00',
	        	'tipo' => 'cabelo'
        	],
        	[
	        	'nome' => 'degrade',
	        	'preco' => '40.00',
	        	'tipo' => 'cabelo'
        	],
        	[
	        	'nome' => 'coloracao',
	        	'preco' => '20.00',
	        	'tipo' => 'cabelo'
        	]

        ]);
        }
    }
}
