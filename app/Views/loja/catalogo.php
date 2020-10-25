
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

	<!-- Começo Banner de fundo-->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>catalogo de Calçados</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Página Inicial<span class="lnr lnr-arrow-right"></span></a>
						<a href="index.html">Loja<span class="lnr lnr-arrow-right"></span></a>
						<a href="catalogo.html">Catalogo</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- Fim Banner de Fundo -->

	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head">Categorias</div>
					<ul class="main-categories">
						<li class="main-nav-list"><a data-toggle="collapse" href="#" aria-expanded="false" aria-controls="categoriascalcados"><span
								 class="lnr lnr-arrow-right"></span>Tudo<span class="number">(53)</span></a>
							<ul class="collapse" id="categorias" data-toggle="collapse" aria-expanded="false" aria-controls="categoriascalcados>
								<li class="main-nav-list child"><a href="#">categoria 1<span class="number">qtd</span></a></li>
								<li class="main-nav-list child"><a href="#">categoria 2<span class="number">qtd</span></a></li>
								<li class="main-nav-list child"><a href="#">categoria 3<span class="number">qtd</span></a></li>
								<li class="main-nav-list child"><a href="#">categoria 4<span class="number">(qtd)</span></a></li>
								<li class="main-nav-list child"><a href="#">categria 5<span class="number">(qtd)</span></a></li>
							</ul>
						</li>

						<li class="main-nav-list"><a data-toggle="collapse" href="#meatFish" aria-expanded="false" aria-controls="meatFish"><span
								 class="lnr lnr-arrow-right"></span> Masculino<span class="number">(53)</span></a>
							<ul class="collapse" id="meatFish" data-toggle="collapse" aria-expanded="false" aria-controls="meatFish">
								<li class="main-nav-list child"><a href="#">TIPO 1<span class="number">(13)</span></a></li>
								<li class="main-nav-list child"><a href="#">TIPO 2<span class="number">(09)</span></a></li>
								<li class="main-nav-list child"><a href="#">TIPO 3<span class="number">(17)</span></a></li>
								<li class="main-nav-list child"><a href="#">TIPO 4<span class="number">(01)</span></a></li>
								<li class="main-nav-list child"><a href="#">TIPO 5<span class="number">(11)</span></a></li>
							</ul>
						</li>
						<li class="main-nav-list"><a data-toggle="collapse" href="#meatFish" aria-expanded="false" aria-controls="meatFish"><span
							class="lnr lnr-arrow-right"></span> Feminino<span class="number">(53)</span></a>
					   <ul class="collapse" id="meatFish" data-toggle="collapse" aria-expanded="false" aria-controls="meatFish">
						   <li class="main-nav-list child"><a href="#">TIPO 1<span class="number">(13)</span></a></li>
						   <li class="main-nav-list child"><a href="#">TIPO 2<span class="number">(09)</span></a></li>
						   <li class="main-nav-list child"><a href="#">TIPO 3<span class="number">(17)</span></a></li>
						   <li class="main-nav-list child"><a href="#">TIPO 4<span class="number">(01)</span></a></li>
						   <li class="main-nav-list child"><a href="#">TIPO 5<span class="number">(11)</span></a></li>
					   </ul>
				   </li>
				   <li class="main-nav-list"><a data-toggle="collapse" href="#meatFish" aria-expanded="false" aria-controls="meatFish"><span
					class="lnr lnr-arrow-right"></span> Infantil<span class="number">(53)</span></a>
			   <ul class="collapse" id="meatFish" data-toggle="collapse" aria-expanded="false" aria-controls="meatFish">
				   <li class="main-nav-list child"><a href="#">TIPO 1<span class="number">(13)</span></a></li>
				   <li class="main-nav-list child"><a href="#">TIPO 2<span class="number">(09)</span></a></li>
				   <li class="main-nav-list child"><a href="#">TIPO 3<span class="number">(17)</span></a></li>
				   <li class="main-nav-list child"><a href="#">TIPO 4<span class="number">(01)</span></a></li>
				   <li class="main-nav-list child"><a href="#">TIPO 5<span class="number">(11)</span></a></li>
			   </ul>
		   </li>
				</div>
				<div class="sidebar-filter mt-50">
					<div class="top-filter-head">Filtros </div>
					<div class="common-filter">
						<div class="head">Cor</div>
						<form action="#">
							<ul>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="black" name="color"><label for="black">preta<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather" name="color"><label for="balckleather">Preta
										Fosca<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="blackred" name="color"><label for="blackred">Preto
										com vermelho<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">Dourado<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey" name="color"><label for="spacegrey">Cinza<span>(19)</span></label></li>
							</ul>
						</form>
					</div>
				</div>
			</div>
			<!-- Começo filtro paginação e pesquisa acima catalogo -->
			<div class="col-xl-9 col-lg-8 col-md-7">
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting">
						<select>
							<option value="1">relevantes</option>
							<option value="2">Baixo para Alto</option>
							<option value="3">Alto para Baixo</option>
						</select>
					</div>
					<div class="sorting mr-auto">
						<select>
							<option value="1">Masculino</option>
							<option value="2">Feminino </option>
							<option value="3">Infantil</option>
						</select>
					</div>
					<div class="pagination">
						<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						<a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
						<a href="#">6</a>
						<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- Fim filtro menu paginação e pesquisa acima catalogo -->
				<!-- Começo apresentação de catalogo -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						<!-- calçado 01-->
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="img/product/p6.jpg" alt="">
								<div class="product-details">
									<h6>addidas New Hammer sole
										for Sports person</h6>
									<div class="price">
										<h6>$150.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
									<div class="prd-bottom">

										<a href="sacola.html" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">sacola</p>
										</a>
										<a href="detalhes-produto.html" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">ver mais</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- calçado 02 -->
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="img/product/p6.jpg" alt="">
								<div class="product-details">
									<h6>addidas New Hammer sole
										for Sports person</h6>
									<div class="price">
										<h6>$150.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
									<div class="prd-bottom">

										<a href="sacola.html" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">sacola</p>
										</a>
										<a href="detalhes-produto.html" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">ver mais</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- calçado 03 -->
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="img/product/p6.jpg" alt="">
								<div class="product-details">
									<h6>addidas New Hammer sole
										for Sports person</h6>
									<div class="price">
										<h6>$150.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
									<div class="prd-bottom">

										<a href="sacola.html" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">sacola</p>
										</a>
										<a href="detalhes-produto.html" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">ver mais</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- calçado 04 -->
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="img/product/p6.jpg" alt="">
								<div class="product-details">
									<h6>addidas New Hammer sole
										for Sports person</h6>
									<div class="price">
										<h6>$150.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
									<div class="prd-bottom">

										<a href="sacola.html" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">sacola</p>
										</a>
										<a href="detalhes-produto.html" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">ver mais</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- calçado 05 -->
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="img/product/p6.jpg" alt="">
								<div class="product-details">
									<h6>addidas New Hammer sole
										for Sports person</h6>
									<div class="price">
										<h6>$150.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
									<div class="prd-bottom">

										<a href="sacola.html" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">sacola</p>
										</a>
										<a href="detalhes-produto.html" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">ver mais</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- calçado 06 -->
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="img/product/p6.jpg" alt="">
								<div class="product-details">
									<h6>addidas New Hammer sole
										for Sports person</h6>
									<div class="price">
										<h6>$150.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
									<div class="prd-bottom">

										<a href="sacola.html" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">sacola</p>
										</a>
										<a href="detalhes-produto.html" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">ver mais</p>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- Fim apresentação catalogo -->
				<!-- Começo iltro barra paginação catalogo -->
				
					<div class="pagination">
						<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						<a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
						<a href="#">6</a>
						<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- Fim filtro barra paginação calçados -->
			</div>
		</div>
	</div>

		<!-- Começo Destaques da semana -->
		<section class="related-product-area section_gap_bottom">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Destaques da semana</h1>
							<p>Ofertas imperdiveis! Não perca.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-9">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
								<div class="single-related-product d-flex">
									<a href="#"><img src="img/r1.jpg" alt=""></a>
									<div class="desc">
										<a href="#" class="title">Oferta 01</a>
										<div class="price">
											<h6>$189.00</h6>
											<h6 class="l-through">$210.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
								<div class="single-related-product d-flex">
									<a href="#"><img src="img/r2.jpg" alt=""></a>
									<div class="desc">
										<a href="#" class="title">Oferta 02</a>
										<div class="price">
											<h6>$189.00</h6>
											<h6 class="l-through">$210.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
								<div class="single-related-product d-flex">
									<a href="#"><img src="img/r3.jpg" alt=""></a>
									<div class="desc">
										<a href="#" class="title">Oferta 03</a>
										<div class="price">
											<h6>$189.00</h6>
											<h6 class="l-through">$210.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
								<div class="single-related-product d-flex">
									<a href="#"><img src="img/r5.jpg" alt=""></a>
									<div class="desc">
										<a href="#" class="title">Oferta 04</a>
										<div class="price">
											<h6>$189.00</h6>
											<h6 class="l-through">$210.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
								<div class="single-related-product d-flex">
									<a href="#"><img src="img/r6.jpg" alt=""></a>
									<div class="desc">
										<a href="#" class="title">Oferta 05</a>
										<div class="price">
											<h6>$189.00</h6>
											<h6 class="l-through">$210.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
								<div class="single-related-product d-flex">
									<a href="#"><img src="img/r7.jpg" alt=""></a>
									<div class="desc">
										<a href="#" class="title">Oferta 06</a>
										<div class="price">
											<h6>$189.00</h6>
											<h6 class="l-through">$210.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="single-related-product d-flex">
									<a href="#"><img src="img/r9.jpg" alt=""></a>
									<div class="desc">
										<a href="#" class="title">Oferta 07</a>
										<div class="price">
											<h6>$189.00</h6>
											<h6 class="l-through">$210.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="single-related-product d-flex">
									<a href="#"><img src="img/r10.jpg" alt=""></a>
									<div class="desc">
										<a href="#" class="title">Oferta 08</a>
										<div class="price">
											<h6>$189.00</h6>
											<h6 class="l-through">$210.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="single-related-product d-flex">
									<a href="#"><img src="img/r11.jpg" alt=""></a>
									<div class="desc">
										<a href="#" class="title">Oferta 09</a>
										<div class="price">
											<h6>$189.00</h6>
											<h6 class="l-through">$210.00</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="ctg-right">
							<a href="#" target="_blank">
								<img class="img-fluid d-block mx-auto" src="img/category/c5.jpg" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Fim destaques da semana -->
