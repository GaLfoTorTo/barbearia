<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Modelo;

class Pagina extends Controller
{

    public function home(){
    	$cortes = Categoria::where('tipo' , 'cabelo')->get();
    	$barbas = Categoria::where('tipo' , 'barba')->get();
        return view('home', compact('cortes', 'barbas'));
    }

    public function agendamento(){
    	$cortes = Categoria::where('tipo' , 'cabelo')->get();
    	$barbas = Categoria::where('tipo' , 'barba')->get();
        return view('agendamento', compact('cortes' , 'barbas'));
    }

    public function modelos(){
        $categorias = Categoria::with('modelos')->get();
        /* foreach($categorias as $cat) {
            echo '<strong>Categoria: ' . ucfirst($cat->nome) . '</strong><br>'; 
            foreach($cat->modelos as $modelo) {
                echo ' -- ' . $modelo->nome . '<br>' ;
            }
            echo '<br><br>' ;
            
        } */
        return view('modelos', compact('categorias'));
    }
}
