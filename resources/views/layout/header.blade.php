<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Barbearia Cabra Macho</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
        <link href="{{ asset('icon/all.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <header class="headerMenu">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark menu">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <img src="./img/logo.png" class="logo" alt="">
                    </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav " id="itensMenu">
                      <a class="nav-link {{ request()->segment(1) == '' ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                      <a class="nav-link {{ request()->segment(1) == 'agendamento' ? 'active' : '' }}  " href="/agendamento">Agendamento</a>
                      <a class="nav-link {{ request()->segment(1) == 'modelos' ? 'active' : '' }}" href="/modelos">Modelos</a>
                    </div>
                  </div>
                </div>
              </nav>
        </header>
        <main class="corpo">
