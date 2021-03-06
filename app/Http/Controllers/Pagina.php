<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;
use App\Models\modelo;

class Pagina extends Controller
{

    public function home(){
    	$cortes = categoria::all()->where('tipo' , 'cabelo');
    	$barbas = categoria::all()->where('tipo' , 'barba');
        return view('home', compact('cortes', 'barbas'));
    }

    public function agendamento(){
    	$cortes = categoria::all()->where('tipo' , 'cabelo');
    	$barbas = categoria::all()->where('tipo' , 'barba');
        return view('agendamento', compact('cortes' , 'barbas'));
    }

    public function modelos(){
        $modelos = modelo::all();
        dd($modelos);
        return view('modelos');
    }
}
