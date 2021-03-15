<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Modelo;
use App\Models\Profissional;

class Pagina extends Controller
{

    public function home(){
    	$cortes = Categoria::where('tipo' , 'cabelo')->get();
    	$barbas = Categoria::where('tipo' , 'barba')->get();
        $profissionais = Profissional::get();
        return view('home', compact('cortes', 'barbas', 'profissionais'));
    }

    public function agendamento(){
    	$cortes = Categoria::where('tipo' , 'cabelo')->get();
    	$barbas = Categoria::where('tipo' , 'barba')->get();
        $profissionais = Profissional::get();
        return view('agendamento', compact('cortes' , 'barbas', 'profissionais'));
    }

    public function modelos(){
        $categorias = Categoria::with('modelos')->get();
        return view('modelos', compact('categorias'));

    }
}
