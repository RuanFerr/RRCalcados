
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
					<div class="head">Olá,(nome usuário)</div>
					<ul class="main-categories">
						<li class="main-nav-list"><a data-toggle="collapse" href="#meatFish" aria-expanded="false"
								aria-controls="meatFish"><span class="lnr lnr-arrow-right"><a>Administrador</a>
									<br>
						<li>
							<img src="img/bootstrap-icons-1.0.0/person-circle.svg" alt="" width="32" height="32" title="Bootstrap">
							<a href="tela-perfil-cliente.html"> Sua conta</a>
						</li>
						<br>
						<li>
							<img src="img/bootstrap-icons-1.0.0/bag.svg" alt="" width="32" height="32" title="Bootstrap">
							<a href="pedidos-cliente.html">Meus Pedidos </a>
						</li>
						<br>
						<li>
							<img src="img/bootstrap-icons-1.0.0/truck.svg" alt="" width="32" height="32"
								title="Bootstrap">
							<a href="envios-cliente.html">Pedidos á caminho</a>
						</li>
						<br>
						<li>
							<img src="img/bootstrap-icons-1.0.0/arrow-left-right.svg" alt="" width="32" height="32"
								title="Bootstrap">
							<a href="trocas-cliente.html">Trocas</a>
						</li>
						<br>
						<li>
							<img src="img/bootstrap-icons-1.0.0/house.svg" alt="" width="32" height="32"
								title="Bootstrap">
							<a href="enderecos-cliente.html">Endereços</a>
						</li>
						<br>
						<li>
							<img src="img/bootstrap-icons-1.0.0/pen.svg" alt="" width="32" height="32"
								title="Bootstrap">
							<a href="seus-dados.html">Seus dados</a>
						</li>
						<br>
						<li>
							<img src="img/bootstrap-icons-1.0.0/door-open.svg" alt="" width="32" height="32"
								title="Bootstrap">
							<a href="index.html">Sair</a>
						</li>
					</li>
				</li>

				</div>
				
			</div>
            <!--FIM MENU LATERAL FUNÇÕES  ADM-->
            
     	<!-- Começo apresentação form produtos -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						<div class="col-lg-10 col-md-10">
							<div class="single-product">
								<div class="product-details">
									<h3>Área do Cliente</h3>
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
<br>
	