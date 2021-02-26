<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagina;


Route::get('/', [Pagina::class, 'home'])->name('home');
Route::get('/cadastro', [Pagina::class, 'cadastro'])->name('cadastro');
Route::get('/modelos', [Pagina::class, 'modelos'])->name('modelos');