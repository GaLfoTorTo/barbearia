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
            <h3 class="titulos offset-1">Barbas Maquina</h3>
        </div>
        <div class="col-md-11 carousel cs-hidden">
            <div class="botoesCarousel">
                <button type="button" data-bs-slide-target="#carousel_slide" data-bs-slide-to="0" class="botaoCarousel" aria-label="Slide 1"></button>
                <button type="button" data-bs-slide-target="#carousel_slide" data-bs-slide-to="1" class="botaoCarousel active" aria-label="Slide 2"></button>
                <button type="button" data-bs-slide-target="#carousel_slide" data-bs-slide-to="2" class="botaoCarousel" aria-label="Slide 3"></button>
                <button type="button" data-bs-slide-target="#carousel_slide" data-bs-slide-to="3" class="botaoCarousel" aria-label="Slide 4"></button>
                <button type="button" data-bs-slide-target="#carousel_slide" data-bs-slide-to="4" class="botaoCarousel" aria-label="Slide 5"></button>
            </div>
            <div class="itens">
                @foreach ($categoria as $cat)
                @if( $cat->modelo_id == 1)
                    @foreach( $cat->modelos as $barbaMaquina)
                        <div class="item">
                            <img src="{{ $barbaMaquina->foto}}" class="fotos" id="{{ $barbaMaquina->id }}">
                        </div>
                    @endforeach
                @endif
            @endforeach
            </div>
            <button class="botaoArrow botaoLeft" data-bs-target="#carousel_slide" type="button" data-slide="prev">
                <span class="arrowIcon fas fa-arrow-left" aria-hidden="true"></span>
            </button>
            <button class="botaoArrow botaoRight" data-bs-target="#carousel_slide" type="button" data-slide="next">
                <span class="arrowIcon fas fa-arrow-right" aria-hidden="true"></span>
            </button>   
        </div>
    </div>
</section> 
<hr class="hr"/>
<section class="row">
    <div class="col-md-12">
        <h2 class="titutos offset-1"></h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3 class="titulos offset-1">Barbas Navalha</h3>
        </div>
        <div class="col-md-11 carousel cs-hidden">
            <div class="botoesCarousel">
                <button type="button" data-bs-slide-target="#carousel_slide" data-bs-slide-to="0" class="botaoCarousel" aria-label="Slide 1"></button>
                <button type="button" data-bs-slide-target="#carousel_slide" data-bs-slide-to="1" class="botaoCarousel active" aria-label="Slide 2"></button>
                <button type="button" data-bs-slide-target="#carousel_slide" data-bs-slide-to="2" class="botaoCarousel" aria-label="Slide 3"></button>
                <button type="button" data-bs-slide-target="#carousel_slide" data-bs-slide-to="3" class="botaoCarousel" aria-label="Slide 4"></button>
                <button type="button" data-bs-slide-target="#carousel_slide" data-bs-slide-to="4" class="botaoCarousel" aria-label="Slide 5"></button>
            </div>
            <div class="itens">
                @foreach ($categoria as $cat)
                @if( $cat->modelo_id == 2)
                    @foreach( $cat->modelos as $barbaNavalha)
                        <div class="item">
                            <img src="{{ $barbaNavalha->foto}}" class="fotos" id="{{ $barbaNavalha->id }}">
                        </div>
                    @endforeach
                @endif
            @endforeach
            </div>
            <button class="botaoArrow botaoLeft" data-bs-target="#carousel_slide" type="button" data-slide="prev">
                <span class="arrowIcon fas fa-arrow-left" aria-hidden="true"></span>
            </button>
            <button class="botaoArrow botaoRight" data-bs-target="#carousel_slide" type="button" data-slide="next">
                <span class="arrowIcon fas fa-arrow-right" aria-hidden="true"></span>
            </button>   
        </div>
    </div>
</section>
<hr class="hr"/>
<section class="row">
    <div class="col-md-12">
        <h2 class="titutos offset-1"></h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3 class="titulos offset-1">Degradê</h3>
        </div>
        <div class="col-md-11 carousel cs-hidden">
            <div class="botoesCarousel">
                <button type="button" data-bs-slide-target="#carousel_slide" data-bs-slide-to="0" class="botaoCarousel" aria-label="Slide 1"></button>
                <button type="button" data-bs-slide-target="#carousel_slide" data-bs-slide-to="1" class="botaoCarousel active" aria-label="Slide 2"></button>
                <button type="button" data-bs-slide-target="#carousel_slide" data-bs-slide-to="2" class="botaoCarousel" aria-label="Slide 3"></button>
                <button type="button" data-bs-slide-target="#carousel_slide" data-bs-slide-to="3" class="botaoCarousel" aria-label="Slide 4"></button>
                <button type="button" data-bs-slide-target="#carousel_slide" data-bs-slide-to="4" class="botaoCarousel" aria-label="Slide 5"></button>
            </div>
            <div class="itens">
            @foreach ($categoria as $cat)
                @if( $cat->modelo_id == 7)
                    @foreach( $cat->modelos as $degrade)
                    <div class="item">
                        <img src="{{ $degrade->foto}}" class="fotos" id="{{ $degrade->id }}">
                    </div>
                    @endforeach
                @endif
            @endforeach
            </div>
            <button class="botaoArrow botaoLeft" data-bs-target="#carousel_slide" type="button" data-slide="prev">
                <span class="arrowIcon fas fa-arrow-left" aria-hidden="true"></span>
            </button>
            <button class="botaoArrow botaoRight" data-bs-target="#carousel_slide" type="button" data-slide="next">
                <span class="arrowIcon fas fa-arrow-right" aria-hidden="true"></span>
            </button>   
        </div>
    </div>
</section>
<hr class="hr"/>
<section class="row">
    <div class="col-md-12">
        <h2 class="titutos offset-1"></h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3 class="titulos offset-1">Coloração</h3>
        </div>
        <div class="col-md-11 carousel cs-hidden">
            <div class="botoesCarousel">
                <button type="button" data-bs-slide-target="#carousel_slide" data-bs-slide-to="0" class="botaoCarousel" aria-label="Slide 1"></button>
                <button type="button" data-bs-slide-target="#carousel_slide" data-bs-slide-to="1" class="botaoCarousel active" aria-label="Slide 2"></button>
                <button type="button" data-bs-slide-target="#carousel_slide" data-bs-slide-to="2" class="botaoCarousel" aria-label="Slide 3"></button>
                <button type="button" data-bs-slide-target="#carousel_slide" data-bs-slide-to="3" class="botaoCarousel" aria-label="Slide 4"></button>
                <button type="button" data-bs-slide-target="#carousel_slide" data-bs-slide-to="4" class="botaoCarousel" aria-label="Slide 5"></button>
            </div>
            <div class="itens">
                @foreach ($categoria as $cat)
                @if( $cat->modelo_id == 8)
                    @foreach( $cat->modelos as $coloracao)
                    <div class="item">
                        <img src="{{ $coloracao->foto}}" class="fotos" id="{{ $coloracao->id }}">
                    </div>
                    @endforeach
                @endif
            @endforeach
            </div>
            <button class="botaoArrow botaoLeft" data-bs-target="#carousel_slide" type="button" data-slide="prev">
                <span class="arrowIcon fas fa-arrow-left" aria-hidden="true"></span>
            </button>
            <button class="botaoArrow botaoRight" data-bs-target="#carousel_slide" type="button" data-slide="next">
                <span class="arrowIcon fas fa-arrow-right" aria-hidden="true"></span>
            </button>   
        </div>
    </div>
</section> 
@include("layout.footer")
<script>
    var carousel = document.getElementsByClassName('itens');
    $(document).ready(function {
        
    })
</script>