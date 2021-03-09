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
                    'categoria_id' => 1
    			],
    			[
    				'nome' => 'barba maquina 02',
    				'foto' => 'https://cdn.shopify.com/s/files/1/0266/8832/3687/articles/barba4_1200x630.jpg?v=1573565772',
                    'categoria_id' => 1
    			],
    			[
    				'nome' => 'barba maquina 03',
    				'foto' => 'https://blog.barbaderespeito.com.br/wp-content/uploads/2018/02/barba-lenhador.jpg',
                    'categoria_id' => 1
    			],
				[
    				'nome' => 'barba maquina 04',
    				'foto' => 'https://homensquesecuidam.com/wp-content/uploads/2013/08/Barba-rente-HQSC-3.jpg',
                    'categoria_id' => 1
    			],
				[
    				'nome' => 'barba maquina 05',
    				'foto' => 'https://i0.wp.com/fashionando.com/wp-content/uploads/2017/03/barba-por-fazer1.png?fit=800%2C400',
                    'categoria_id' => 1
    			],
				[
    				'nome' => 'barba navalha 01',
    				'foto' => 'https://i.pinimg.com/originals/f4/47/70/f44770ae841ce53a0da05d8c8eca992a.jpg',
                    'categoria_id' => 2
    			],
				[
    				'nome' => 'barba navalha 02',
    				'foto' => 'https://homensquesecuidam.com/wp-content/uploads/2019/08/barbas-2019-homens-que-se-cuidam-por-juan-alves-a.jpg',
                    'categoria_id' => 2
    			],
				[
    				'nome' => 'barba navalha 03',
    				'foto' => 'https://blog.newoldman.com.br/wp-content/uploads/2019/08/Estilos-de-Barba-Com-Risco-De-Navalha-3.jpg',
                    'categoria_id' => 2
    			],
				[
    				'nome' => 'barba navalha 04',
    				'foto' => 'https://blog.newoldman.com.br/wp-content/uploads/2019/08/Estilos-de-Barba-Com-Risco-De-Navalha-4.jpg',
                    'categoria_id' => 2
    			],
				[
    				'nome' => 'barba navalha 05',
    				'foto' => 'https://i.pinimg.com/originals/58/0e/34/580e34b1cc3f83717dda060f8fddbebd.jpg',
                    'categoria_id' => 2
    			],
    			[
    				'nome' => 'degrade 01',
    				'foto' => 'https://mhmcdn.ynvolve.net/?w=750&h=856&quality=100&clipping=landscape&url=//mhmcdn.ynvolve.net/?w=750&h=450&quality=100&clipping=landscape&url=//manualdohomemmoderno.com.br/files/2020/01/cortes-de-cabelos-masculinos-para-2020-cortes-de-cabelos-masculinos-para-2020-7.jpg&format=webp&hash=9e15412e1a9bc362d989b802ee9d9b5625de572a94c5152151d9b674a1b425bd&format=webp&hash=22cb01997f7c98c099271e839d55c7a26d3dc83ed40d8b40bd82e9e20fe16a98',
                    'categoria_id' => 7
    			],
    			[
    				'nome' => 'degrade 02',
    				'foto' => 'https://i.pinimg.com/originals/90/75/f7/9075f79153e3d1e0e6b29f126001d64a.jpg',
                    'categoria_id' => 7
    			],
    			[
    				'nome' => 'degrade 03',
    				'foto' => 'https://reyne.info/images5/0420/estilo-de-corte-de-cabelo-masculino-2020/estilo-de-corte-de-cabelo-masculino-2020-39.jpg',
                    'categoria_id' => 7
    			],
				[
    				'nome' => 'degrade 04',
    				'foto' => 'https://ssl8972.websiteseguro.com/curtiram/images/fotos/mh_interna_galeria_corte-de-cabelo-masculino-fade-19.jpg',
                    'categoria_id' => 7
    			],
				[
    				'nome' => 'degrade 05',
    				'foto' => 'https://i.pinimg.com/originals/43/da/b8/43dab8d43c4aa0648948b248279f3c80.jpg',
                    'categoria_id' => 7
    			],
				[
    				'nome' => 'coloracao 01',
    				'foto' => 'https://2.bp.blogspot.com/-4Y94S2GC4B8/VcVy6HqDEgI/AAAAAAAAX3s/2Gci5ufv2Os/s1600/cabelo_colorido_masculino%2B%252810%2529.jpg',
                    'categoria_id' => 8
    			],
				[
    				'nome' => 'coloracao 02',
    				'foto' => 'https://i.pinimg.com/originals/e8/58/1c/e8581c4e420a1768fd9e032667a86f3e.jpg',
                    'categoria_id' => 8
    			],
				[
    				'nome' => 'coloracao 03',
    				'foto' => 'https://ath2.unileverservices.com/wp-content/uploads/sites/2/2016/04/homens-de-cabelo-colorido-2-2-1020x1024.jpg',
                    'categoria_id' => 8
    			],
				[
    				'nome' => 'coloracao 04',
    				'foto' => 'https://homensquesecuidam.com/wp-content/uploads/2017/06/cabelo-colorido-masculino-homens-que-se-cuidam-c.jpg',
                    'categoria_id' => 8
    			],
				[
    				'nome' => 'coloracao 05',
    				'foto' => 'https://i.pinimg.com/originals/bf/d2/d2/bfd2d284103f2af8fbf2d2f4ffdf97ea.jpg',
                    'categoria_id' => 8
    			],

    		]);
    	}
    }
}
