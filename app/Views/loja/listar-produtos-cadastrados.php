<!DOCTYPE html>
<html lang="br" class="no-js">

<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="img/logo2.png">
	<meta name="autor" content="Multistart Sistems">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="UTF-8">
	<title>RR Calçados</title>
	<!--CSS============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

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
						<li class="main-nav-list"><a data-toggle="collapse" href="#meatFish" aria-expanded="false" aria-controls="meatFish"><span
								 class="lnr lnr-arrow-right"><a>Administrador</a>
								 <br>
								<li>
									<img src="img/bootstrap-icons-1.0.0/file-plus.svg" alt="" width="32" height="32" title="Bootstrap">
									<a href="gerenciar-produtos.html"> Gerênciar Produtos</a>
								</li>
								<br>
								<li>
									<img src="img/bootstrap-icons-1.0.0/search.svg" alt="" width="32" height="32" title="Bootstrap">
									<a href="buscar-produtos.html"> Buscar Produto </a>
								</li>
								<br>
								<li>
									<img src="img/bootstrap-icons-1.0.0/truck.svg" alt="" width="32" height="32" title="Bootstrap">
									<a href="envios-adm.html">Envios</a>
								</li>
								<br>
								<li>
									<img src="img/bootstrap-icons-1.0.0/exclamation-square.svg" alt="" width="32" height="32" title="Bootstrap">
									<a href="destques-semana.html">Destaques da semana</a>
							   </li>
							   <br>
							   <li>
								<img src="img/bootstrap-icons-1.0.0/file-image.svg" alt="" width="32" height="32" title="Bootstrap">
								<a href="criar-promocao.html">Criar promoção</a> 
							  </li>
							  <br>
                                 <li>
                                      <img src="img/bootstrap-icons-1.0.0/cash-stack.svg" alt="" width="32" height="32" title="Bootstrap">
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
									<img src="img/bootstrap-icons-1.0.0/file-earmark-ruled.svg" alt="" width="32" height="32" title="Bootstrap">
									 <a href="relatorio-vendas-mes.html">Neste mês</a>
								 </li>
									 <br>
								  <li>
									   <img src="img/bootstrap-icons-1.0.0/file-earmark-ruled.svg" alt="" width="32" height="32" title="Bootstrap">
									   <a href="relatorio-vendas-trimestre.html">Último trimestre</a> 
									</li>
									 <br>
									 <li>
										<img src="img/bootstrap-icons-1.0.0/file-earmark-ruled.svg" alt="" width="32" height="32" title="Bootstrap">
										 <a href="relatorio-engajamento-social.html">Engajamento social</a> 
									 </li>
									 <br>
									 <li>
										 <img src="img/bootstrap-icons-1.0.0/file-earmark-ruled.svg" alt="" width="32" height="32" title="Bootstrap">
										 <a href="relatorio-vendas-final-ano.html">Vendas do final do ano </a> 
									 </li>
							</ul>
						</form>
					</div>
				</div>
			</div>
			<!--FIM MENU LATERAL FUNÇÕES  ADM-->
			
			<!-- Começo menu gerenciar calçados  -->
			<div class="col-xl-9 col-lg-8 col-md-7">
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting">
						<button  type="submit" value="submit" class="primary-btn"><a href="gerenciar-produtos.html">cadastrar</a></button>
					</div>
					<div class="sorting mr-auto">
						<button type="submit" value="submit" class="primary-btn"><a href="listar-produtos-cadastrados.html">cadastrados</a></button>
					</div>
				</div>
				<!-- fim menu gerênciar calçados -->

				<!-- Começo apresentação form produtos -->
				 <section class="cart_area">
                    <div class="container">
                        <div class="cart_inner">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Produtos</th>
                                            <th scope="col">Preço</th>
                                            <th scope="col">Quantidade</th>
                                            <th scope="col">categoria</th>
                                            <th scope="col">Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <div class="d-flex">
                                                        <img src="img/r4.jpg" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <p>Sandalia rosa</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5>$250.00</h5>
                                            </td>
                                            <td>
                                                <div class="product_count">
                                                    <h5>1</h5>
                                            </td>
                                            <td>
                                                <div class="product_count">
                                                    <h5>feminina</h5>
                                            </td>
                                            <td>
                                                <div class="product_count">
                                                    <h5><a href="cadastrar-produtos.html">editar</a></h5>
                                                    <h5><a href="#">excluir</a></h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <div class="d-flex">
                                                        <img src="img/r4.jpg" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <p>Sandalia rosa</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5>$250.00</h5>
                                            </td>
                                            <td>
                                                <div class="product_count">
                                                    <h5>1</h5>
                                            </td>
                                            <td>
                                                <div class="product_count">
                                                    <h5>feminina</h5>
                                            </td>
                                            <td>
                                                <div class="product_count">
                                                    <h5><a href="cadastrar-produtos.html">editar</a></h5>
                                                    <h5><a href="#">excluir</a></h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <div class="d-flex">
                                                        <img src="img/r4.jpg" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <p>Sandalia rosa</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5>$250.00</h5>
                                            </td>
                                            <td>
                                                <div class="product_count">
                                                    <h5>1</h5>
                                            </td>
                                            <td>
                                                <div class="product_count">
                                                    <h5>feminina</h5>
                                            </td>
                                            <td>
                                                <div class="product_count">
                                                    <h5><a href="cadastrar-produtos.html">editar</a></h5>
                                                    <h5><a href="#">excluir</a></h5>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			 <!--fim form cadastro pag detalhes do produto-->
			</div>
		</div>
	


	<!-- Começo Rodape-->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Sobre nós</h6>
						<p>
							RR Calçados  - Localização:
							Rua: Padre Emilio Cabral, 133 - Centro - Assaré
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Receba Ofertas</h6>
						<p>Informe seu email para receber odertas </p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
													<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
												</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Feedss do Instragram</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="img/i1.jpg" alt=""></li>
							<li><img src="img/i2.jpg" alt=""></li>
							<li><img src="img/i3.jpg" alt=""></li>
							<li><img src="img/i4.jpg" alt=""></li>
							<li><img src="img/i5.jpg" alt=""></li>
							<li><img src="img/i6.jpg" alt=""></li>
							<li><img src="img/i7.jpg" alt=""></li>
							<li><img src="img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Siga-nos </h6>
						<p>Nossas redes socais </p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
						 <!---	<a href="#"><i class="fa fa-dribbble"></i></a> -->
						<!--<a href="#"><i class="fa fa-behance"></i></a> -->
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados para <i class="fa fa-heart-o" aria-hidden="true"></i> de <a href="https://www.rrcalcados.com.br target="_blank">RR Calçados</a>
</p>
			</div>
		</div>
	</footer>
	<!-- Fim Rodapé -->


	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>