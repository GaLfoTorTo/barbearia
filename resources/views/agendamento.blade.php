@include('layout.header')
<section class="row">
    <div class="col-md-12">
        <h1 class="titulos  offset-2">Agendamento</h1>
        <p class="descricao">Ficou interessado no nosso serviço ? Quer marcar o seu agendamento imediatamente ? Então preenchao formulário de cadastro e informe qual serviço desejaria fazer.</p>
    </div>
</section>
<hr class="hr" />
<section class="col">
    <form method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" id="telefone" class="form-control fone">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-11">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Ex: example@email.com">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label for="confirmacaoSenha">Confirmação de Senha</label>
                    <input type="password" name="confirmacaoSenha" id="confirmacaoSenha" class="form-control" placeholder="Confirme senha">
                </div>
            </div>
        </div>
        <hr class="hr" />
        <div class="row">
            <div class="col-md-5 offset-5">
                <label>Serviços:</label>
            </div>
            <div class="col-md-2 offset-1">
                <div class="form-group">
                    <label for="servico">Barba</label>
                    <input type="radio" class="categoria" name="categoria" id="barba">
                </div>
            </div>
            <div class="col-md-2 offset-1">
                <div class="form-group">
                    <label for="servico">Corte</label>
                    <input type="radio" class="categoria" name="categoria" id="corte">
                </div>
            </div>
            <div class="col-md-2 offset-1">
                <div class="form-group">
                    <label for="servico">Barba e Corte</label>
                    <input type="radio" class="categoria" name="categoria" id="barbaCorte">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-11">
                <div class="form-group">
                    <label for="tipo">Tipo:</label>
                    <select name="tipo" class="form-control" id="tipo">
                        <option value="" id="escolhaTipo">Escolha</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
           <div class="col-md-5">
                <div class="form-group">
                    <label for="data_atendimento">Data do atendimento</label>
                    <input type="date" name="data_atendimento" id="data_atendimento" class="form-control" >
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label for="profissional">Barbeiro</label>
                    <select name="profissional" id="profissional" class="form-control">
                        <option value="">Escolha</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1s offset-10">
                <button class="btn botaoCadastro" type="submit">
                    <i class="fas fa-save"></i> Cadastrar
                </button>
            </div>
        </div>
    </form>
</section>
@include('layout.footer')
<script >
    $('.fone').mask('(99) 99999-9999');
    $('.categoria').click(function(){
        var id = $(this).attr('id');
        if( id == 'barba'){
            $('#tipo').empty()
            $('#tipo').append(
                `@forEach($barbas as $barba)
                    <option value="" id="escolhaTipo">{{ $barba->nome }} R$ {{ $barba->preco }}</option>
                @endForEach`
                );
        }else if( id == 'corte'){
            $('#tipo').empty()
            $('#tipo').append(
                `@forEach($cortes as $corte)
                    <option value="" id="escolhaTipo">{{ $corte->nome }} R$ {{ $corte->preco }}</option>
                @endForEach`
                );
        }else if( id == 'barbaCorte'){
            $('#tipo').empty()
            $('#tipo').append(
                `@forEach($barbas as $barba)                        
                    @forEach($cortes as $corte)                        
                        <option value="" id="escolhaTipo">{{ $barba->nome }} e {{ $corte->nome }} R$ {{ $barba->preco + $corte->preco }}</option>
                    @endForEach
                @endForEach`
                );
        }else{

        }
    });
</script>