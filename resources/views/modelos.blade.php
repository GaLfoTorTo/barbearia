@include("layout.header")
<section class="row">
    <div class="col-md-12">
        <h1 class="titulos offset-4">Modelos</h1>
        <p class="descricao">A seguir temos alguns modelos de corte e barba produzidos pela Barbearia Cabra Macho. Os preços apresentados nessa exibição podem variar caso o cliente queria fazer alguma alteração diferente das mostradas no modelo.</p>
    </div>
</section>
<hr class="hr"/>
<section class="row">
    <div class="col-md-12">
        <h2 class="titutos offset-1"></h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="titulos offset-3">Barba Maquina</h1>
        </div>
        <div class=" cardCarrousel">
            @foreach($categorias as $categoria)
                    @foreach ($categoria->modelos as $barbaMaquina)
                        @if( $barbaMaquina->categoria_id == 1)
                            <img src="{{ $barbaMaquina->foto }}" alt="" class="fotos">
                        @endif
                    @endforeach
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="titulos offset-3">Barba Navalha</h1>
        </div>
        <div class=" cardCarrousel">
            @foreach($categorias as $categoria)
                    @foreach ($categoria->modelos as $barbaNavalha)
                        @if( $barbaNavalha->categoria_id == 2)
                            <img src="{{ $barbaNavalha->foto }}" alt="" class="fotos">
                        @endif
                    @endforeach
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="titulos offset-3">Degradê</h1>
        </div>
        <div class=" cardCarrousel">
            @foreach($categorias as $categoria)
                    @foreach ($categoria->modelos as $degrade)
                        @if( $degrade->categoria_id == 7)
                            <img src="{{ $degrade->foto }}" alt="" class="fotos">
                        @endif
                    @endforeach
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="titulos offset-3">Coloração</h1>
        </div>
        <div class=" cardCarrousel">
            @foreach($categorias as $categoria)
                    @foreach ($categoria->modelos as $coloracao)
                        @if( $coloracao->categoria_id == 8)
                            <img src="{{ $coloracao->foto }}" alt="" class="fotos">
                        @endif
                    @endforeach
            @endforeach
        </div>
    </div>
</section> 
@include("layout.footer")