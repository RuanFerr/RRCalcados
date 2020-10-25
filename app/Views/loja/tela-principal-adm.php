
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
	<!-- Fim menu de navegação -->

	<br><br><br><br><br><br>
	<div class="container">
		<div class="row">
			<!--Começo meNu lateral funções adm -->
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head">RR Calçados</div>
					<ul class="main-categories">
						<li class="main-nav-list"><a data-toggle="collapse" href="#meatFish" aria-expanded="false"
								aria-controls="meatFish"><span class="lnr lnr-arrow-right"><a>Administrador</a>
									<br>
						<li>
							<img src="img/bootstrap-icons-1.0.0/file-plus.svg" alt="" width="32" height="32"
								title="Bootstrap">
							<a href="gerenciar-produtos.html"> Gerênciar Produtos</a>
						</li>
						<br>
						<li>
							<img src="img/bootstrap-icons-1.0.0/search.svg" alt="" width="32" height="32"
								title="Bootstrap">
							<a href="buscar-produtos.html"> Buscar Produto </a>
						</li>
						<br>
						<li>
							<img src="img/bootstrap-icons-1.0.0/truck.svg" alt="" width="32" height="32"
								title="Bootstrap">
							<a href="envios-adm.html">Envios</a>
						</li>
						<br>
						<li>
							<img src="img/bootstrap-icons-1.0.0/exclamation-square.svg" alt="" width="32" height="32"
								title="Bootstrap">
							<a href="destques-semana.html">Destaques da semana</a>
						</li>
						<br>
						<li>
							<img src="img/bootstrap-icons-1.0.0/file-image.svg" alt="" width="32" height="32"
								title="Bootstrap">
							<a href="criar-promocao.html">Criar promoção</a>
						</li>
						<br>
						<li>
							<img src="img/bootstrap-icons-1.0.0/cash-stack.svg" alt="" width="32" height="32"
								title="Bootstrap">
							<a href="verificar-vendas.html">Verificar vendas do dia</a>
						</li>
					</li>
				</li>

				</div>
				<div class="sidebar-filter mt-50">
					<div class="top-filter-head">Relatórios </div>
					<div class="common-filter">
						<form action="#">
							<ul class="main-categories">
								<br>
								<li>
									<img src="img/bootstrap-icons-1.0.0/file-earmark-ruled.svg" alt="" width="32"
										height="32" title="Bootstrap">
									<a href="relatorio-vendas-mes.html">Neste mês</a>
								</li>
								<br>
								<li>
									<img src="img/bootstrap-icons-1.0.0/file-earmark-ruled.svg" alt="" width="32"
										height="32" title="Bootstrap">
									<a href="relatorio-vendas-trimestre.html">Último trimestre</a>
								</li>
								<br>
								<li>
									<img src="img/bootstrap-icons-1.0.0/file-earmark-ruled.svg" alt="" width="32"
										height="32" title="Bootstrap">
									<a href="relatorio-engajamento-social.html">Engajamento social</a>
								</li>
								<br>
								<li>
									<img src="img/bootstrap-icons-1.0.0/file-earmark-ruled.svg" alt="" width="32"
										height="32" title="Bootstrap">
									<a href="relatorio-vendas-final-ano.html">Vendas do final do ano </a>
								</li>
							</ul>
						</form>
					</div>
				</div>
			</div>
            <!--FIM MENU LATERAL FUNÇÕES  ADM-->
            
     	<!-- Começo apresentação form produtos -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						<div class="col-lg-10 col-md-10">
							<div class="single-product">
								<div class="product-details">
									<h3>Área Administrativa RR Calçados</h3>
									<br><br><br><br>
									<form class="row contact_form" action="#" method="post" novalidate="novalidate">
										<div class="col-md-12 form-group p_star">
											<form>
												<div class="form-group">
													<br>
													<img src="img/bootstrap-icons-1.0.0/arrow-left.svg" alt=""height="52" widht="52">
													<br>
													<h5><a>Para acessar essa funcionalidade escolha um dos botões na barra lateral ao lado. </a></h5>
												</div>
											</form>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<!--fim form cadastro pag detalhes do produto-->
		</div>
	</div>
