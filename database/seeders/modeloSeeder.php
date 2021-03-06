<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class modeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('modelos')->get()->count() ==0){
    		DB::table('modelos')->insert([
    			[
    				'nome' => 'barba maquina 01',
    				'foto' => 'https://lh3.googleusercontent.com/proxy/F_7bIjNz7ss1-phHM-y4JaL18qHjzrn1PNzsbLBHoCGwFVzmbcgu6_y7TvgyTqvtRlG6rNIOFX2O-_pqcFG2zYnuqMGiXZ71O0OF5XXu7v_jMDTI0vgO43I_wJIAIZ32WFOJvLX7OEkXZ9w0',
    			],
    			[
    				'nome' => 'barba maquina 02',
    				'foto' => 'https://cdn.shopify.com/s/files/1/0266/8832/3687/articles/barba4_1200x630.jpg?v=1573565772',
    			],
    			[
    				'nome' => 'barba maquina 03',
    				'foto' => 'https://blog.barbaderespeito.com.br/wp-content/uploads/2018/02/barba-lenhador.jpg',
    			],
    			[
    				'nome' => 'corte 01',
    				'foto' => 'https://mhmcdn.ynvolve.net/?w=750&h=856&quality=100&clipping=landscape&url=//mhmcdn.ynvolve.net/?w=750&h=450&quality=100&clipping=landscape&url=//manualdohomemmoderno.com.br/files/2020/01/cortes-de-cabelos-masculinos-para-2020-cortes-de-cabelos-masculinos-para-2020-7.jpg&format=webp&hash=9e15412e1a9bc362d989b802ee9d9b5625de572a94c5152151d9b674a1b425bd&format=webp&hash=22cb01997f7c98c099271e839d55c7a26d3dc83ed40d8b40bd82e9e20fe16a98',
    			],
    			[
    				'nome' => 'corte 02',
    				'foto' => 'https://i.pinimg.com/originals/90/75/f7/9075f79153e3d1e0e6b29f126001d64a.jpg',
    			],
    			[
    				'nome' => 'corte 03',
    				'foto' => 'https://reyne.info/images5/0420/estilo-de-corte-de-cabelo-masculino-2020/estilo-de-corte-de-cabelo-masculino-2020-39.jpg',
    			],
    		]);
    	}
    }
}
