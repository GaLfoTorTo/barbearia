<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagina;


Route::get('/', [Pagina::class, 'home'])->name('home');
Route::get('/agendamento', [Pagina::class, 'agendamento'])->name('agendamento');
Route::get('/modelos', [Pagina::class, 'modelos'])->name('modelos');