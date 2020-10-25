
	<!--Começo Menu de navegação-->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.html">Pagina Inicial</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Loja</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="catalogo.html">Catalogo</a></li>
									<li class="nav-item"><a class="nav-link" href="endereco-envio.html">Endereços para envio</a></li> 
									<li class="nav-item"><a class="nav-link" href="sacola.html">Sacola</a></li>
								</ul>
							</li>
							
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Registra-se/Login</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
								<!-- <li class="nav-item"><a class="nav-link" href="produtos.html">Produtos</a></li> -->
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="contato.html">Contato</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="sacola.html" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- Fim menu de navegação -->>

	<!--================Inicio detalhe do pedido=================-->
	<section class="order_details section_gap">
		<div class="container">
			<h3 class="title_confirmation">Obrigada. Seu pedido está reservado</h3>
			<div class="row order_d_inner">
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Infomações do pedido</h4>
						<ul class="list">
							<li><a href="#"><span>Pedido número</span> : 60235</a></li>
							<li><a href="#"><span>Local</span> : São Paulo</a></li>
							<li><a href="#"><span>Total</span> : R$ 2210</a></li>
							<li><a href="#"><span>Forma de pagamento</span> : Cartão de credito</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Informações de envio- saida</h4>
						<ul class="list">
							<li><a href="#"><span>Rua</span> : nome da rua aqui</a></li>
							<li><a href="#"><span>Cidade</span> : nome da cidade</a></li>
							<li><a href="#"><span>Pais</span> : Brasil</a></li>
							<li><a href="#"><span>CEP </span> : cep deve ficar aqui</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Informações de envio - destino</h4>
						<ul class="list">
							<li><a href="#"><span>Rua</span> : nome da rua aqui</a></li>
							<li><a href="#"><span>Cidade</span> : nome da cidade</a></li>
							<li><a href="#"><span>Pais</span> : Brasil</a></li>
							<li><a href="#"><span>CEP </span> : cep deve ficar aqui</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="order_details_table">
				<h2>Detalhes do Pedido</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Produto</th>
								<th scope="col">Quantidade</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<p>Nome pedido 01</p>
								</td>
								<td>
									<h5>x 02</h5>
								</td>
								<td>
									<p>R$720.00</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>Nome pedido 02</p>
								</td>
								<td>
									<h5>x 02</h5>
								</td>
								<td>
									<p>R$720.00</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>Nome pedido 03</p>
								</td>
								<td>
									<h5>x 02</h5>
								</td>
								<td>
									<p>R$720.00</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Subtotal</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>R$2160.00</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Frete</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>valor frete: r$50.00</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Total</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>R$2210.00</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================fIM DETALHES DO PEDIDO=================-->
