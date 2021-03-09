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
        $barbas = Modelo::with('categoria')->get();
        //$cortes = Modelo::with('categoria')->where('tipo','corte')->get();
        return view('modelos', compact('barbas'));
    }
}
