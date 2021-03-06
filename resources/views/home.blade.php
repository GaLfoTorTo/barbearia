@include('layout.header')
<section class="row">
	<div class="col-md-12 offset-2 cardTitulo">
		<h1 class="titulos">Barbearia Cabra Macho</h1>
	</div>
	<div class="col-md-8 offset-4">
		<img src="./img/headerImg.jpg" class="imgTitulo" alt="">
	</div>
</section>
<hr class="hr" />
<section class="row ">
	<div class="col-md-6 degrade">
		<img class="imgDegrade" src="./img/degrade1.jpg">
		<img class="imgDegrade" src="./img/degrade2.jpg">
	</div>
	<div class="col-md-5">
		<h2 class="offset-4">Cortes</h2> 
		<table class="table  table-striped">
			<thead>
				<tr>
					<th scope="col">Cortes</th>
					<th scope="col" class="preco">Preço</th>
				</tr>
			</thead>
			<tbody>
				@forEach($cortes as $corte)
				<tr>
					<td>{{ $corte->nome }}</td>
					<td class="preco" >R${{ $corte->preco }}</td>
				</tr>
				@endForEach;
			</tbody>
		</table>
	</div>
</section>
<hr class="hr" />
<section class="row">
	<div class="col-md-4">
		<h2 class="offset-4">Barba</h2> 
		<table class="table  table-striped">
			<thead>
				<tr>
					<th scope="col">Estilos</th>
					<th scope="col" class="preco">Preço</th>
				</tr>
			</thead>
			<tbody>
				@forEach($barbas as $barba)
				<tr>
					<td>{{ $barba->nome }}</td>
					<td class="preco" >R${{ $barba->preco }}</td>
				</tr>
				@endForEach;
		</table>
	</div>
	<div class="col-md-7 degrade">
		<img class="imgDegrade" src="./img/barba2.jpg">
		<img class="imgDegrade" src="./img/barba1.jpg">
	</div>
</section>
<hr class="hr">
<section class="row">
	<div class="col-md-12">
		<h1 class="offset-5 titulos">Equipe</h1>
		<p class=" descricao">A equipe da Barbearia Cabra Macho se dedica a proporcionar o melhor serviço e o melhor atendimento aos nososs clientes. Contamos com os melhores profisionais do ramo que trabalham com exelência e profissionalismo.</p>
	</div>
	<div class="col-md-4" align="center">
		<img src="./img/barbeiro1.jpg" class="imgEquipe">
		<h4 class="nomeEquipe">Berenilso</h4>
		<h5 class="cargo">Barbeiro</h5>
	</div>
	<div class="col-md-4" align="center">
		<img src="./img/barbeiro2.jpg" class="imgEquipe">
		<h4 class="nomeEquipe">Fransisglauso</h4>
		<h5 class="cargo">Cabeleireiro</h5>
	</div>
	<div class="col-md-4" align="center">
		<img src="./img/barbeiro3.jpg" class="imgEquipe">
		<h4 class="nomeEquipe">Regirvalsu</h4>
		<h5 class="cargo">Finalizador</h5>
	</div>
</section>
<hr class="hr" />
<section class="contato">
	<div class="col-md-12">
		<h1 class="offset-4 titulos">Contato</h1>
	</div>
	<div class="row cardContato">
		<div class="col-md-5 redesSociais">
			<ul>
				<li>
					<i class="fab fa-facebook" id="icone"></i>
					<p>facebook.com/Barbearia-Cabra-Macho</p>
				</li>
				<li>
					<i class="fab fa-instagram" id="icone"></i>
					<p>@Barbearia-Cabra-Macho</p>
				</li>
				<li>
					<i class="fas fa-envelope" id="icone"></i>
					<p>Barbearia-Cabra-Macho@email.com</p>
				</li>
			</ul>
		</div>
		<div class="col-md-5">
			<h4>Telefones:</h4>
			<p>(61) 99999-9999</p>
			<p>(61) 3333-3333</p>
		</div>
	</div>
</section>
@include('layout.footer')