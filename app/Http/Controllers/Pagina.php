<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagina extends Controller
{
    public function home(){
        return view('home');
    }

    public function cadastro(){
        return view('cadastro');
    }

    public function modelos(){
        return view('modelos');
    }
}
