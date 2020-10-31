
<!--Começo Menu de navegação-->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <a class="navbar-brand logo_h" href="<?php echo base_url("dashboard/index") ?>"><img src="<?php echo base_url("assets/img/logo.png"); ?>" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="<?php echo base_url("home/index") ?>">Pagina Inicial</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="<?php echo base_url('dashboard/index'); ?>" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Loja</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="echo base_url('home/catalogo');">Catalogo</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('home/enderecoEnvio'); ?>">Endereços para envio</a></li> 
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('home/sacola'); ?>">Sacola</a></li>
                            </ul>
                        </li>

                        <li class="nav-item submenu dropdown">
                            <?php if (is_array(session()->get())) { ?>
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                   aria-expanded="false">Registra-se/Login</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('home/login'); ?>">Login</a></li>
                                    <!-- <li class="nav-item"><a class="nav-link" href="produtos.html">Produtos</a></li> -->
                                </ul>
                            <?php } else { ?>
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                   aria-expanded="false"> Conta </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('home/logout'); ?>">Logout</a></li>
                                    <!-- <li class="nav-item"><a class="nav-link" href="produtos.html">Produtos</a></li> -->
                                </ul>
                            <?php } ?>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('home/contato'); ?>">Contato</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a href="<?php echo base_url('home/sacola'); ?>" class="cart"><span class="ti-bag"></span></a></li>
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
            <form action="<?php echo base_url('home/search'); ?>" class="d-flex justify-content-between">
                <input type="text" class="form-control" id="search_input" name="search_input" placeholder="">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
<!-- Fim menu de navegação -->

<!-- Começo  banner Inicio-->
<section class="banner-area">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start">
            <div class="col-lg-12">
                <div class="active-banner-slider owl-carousel">
                    <!-- Apresentação Slide -->
                    <div class="row single-slide align-items-center d-flex">
                        <div class="col-lg-5 col-md-6">
                            <div class="banner-content">
                                <h1>Conserve<br>All Star</h1>
                                <p>All Star branco ...</p>
                                <div class="add-bag d-flex align-items-center">
                                    <a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
                                    <span class="add-text text-uppercase">Adicionar a sacola</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="img/banner/banner-img.png" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- Apresentação Slide  -->
                    <div class="row single-slide">
                        <div class="col-lg-5">
                            <div class="banner-content">
                                <h1>Marca  <br>Nome Calçado</h1>
                                <p>descrição aqui ...</p>
                                <div class="add-bag d-flex align-items-center">
                                    <a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
                                    <span class="add-text text-uppercase">Adicionar a sacola</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="img/banner/banner-img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fim Banner Inicio-->

<!-- Começo icones de informação -->
<section class="features-area section_gap">
    <div class="container">
        <div class="row features-inner">
            <!-- icone 01 -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="img/icones/f-icon1.png" alt="">
                    </div>
                    <h6>Frete</h6>
                    <p>Entregas para toda região do Cariri</p>
                </div>
            </div>

            <!-- icone 02 -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="img/icones/f-icon3.png" alt="">
                    </div>
                    <h6>Atedimento 24 horas</h6>
                    <p>Atedimento ao clinete </p>
                </div>
            </div>
            <!-- icone 03 -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="img/icones/f-icon4.png" alt="">
                    </div>
                    <h6>Segurança no pagamento</h6>
                    <p>Todos os pagamentos são realizados de forma segurançae</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fim icones de informaçao-->  

<!-- Começo apresentaçãp Categorias-->
<section class="category-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="img/category/c1.jpg" alt="">
                            <a href="img/category/c1.jpg" class="img-pop-up" target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">	Feminino</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="img/category/c2.jpg" alt="">
                            <a href="img/category/c2.jpg" class="img-pop-up" target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">Infantil</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="img/category/c3.jpg" alt="">
                            <a href="img/category/c3.jpg" class="img-pop-up" target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">Masculino</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="img/category/c4.jpg" alt="">
                            <a href="img/category/c4.jpg" class="img-pop-up" target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">Tudo</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-deal">
                    <div class="overlay"></div>
                    <img class="img-fluid w-100" src="img/category/c5.jpg" alt="">
                    <a href="img/category/c5.jpg" class="img-pop-up" target="_blank">
                        <div class="deal-details">
                            <h6 class="deal-title">...</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fim  Apresentação Categoria -->

<!-- Começo apresentação dos produtos Novidades-->
<section class="owl-carousel active-product-area section_gap">
    <!-- slide de produtos-->
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Novidades</h1>
                        <p>Calçados moda Feminina</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p1.jpg" alt="">
                        <div class="product-details">
                            <h6>Calçado 01</h6>
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
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p2.jpg" alt="">
                        <div class="product-details">
                            <h6>Calçado 02</h6>
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
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p3.jpg" alt="">
                        <div class="product-details">
                            <h6>Calçado 03</h6>
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
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p4.jpg" alt="">
                        <div class="product-details">
                            <h6>Calçado 04</h6>
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
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p5.jpg" alt="">
                        <div class="product-details">
                            <h6>Nome Calçados</h6>
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
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p6.jpg" alt="">
                        <div class="product-details">
                            <h6>Nome Calçado</h6>
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
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p7.jpg" alt="">
                        <div class="product-details">
                            <h6>NOME cALÇADOS</h6>
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
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p8.jpg" alt="">
                        <div class="product-details">
                            <h6>Nome Calçados</h6>
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">$210.00</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="sacola.html" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">asacola</p>
                                </a>

                                <a href="detalhes-produto.html" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sidle de produtos menu pagina 02 -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Novidades</h1>
                        <p>Calçados moda Masculina.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p6.jpg" alt="">
                        <div class="product-details">
                            <h6>aNome Calçado</h6>
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
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p8.jpg" alt="">
                        <div class="product-details">
                            <h6>Nome Calçado</h6>
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
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p3.jpg" alt="">
                        <div class="product-details">
                            <h6>Nome Calçado</h6>
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
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p5.jpg" alt="">
                        <div class="product-details">
                            <h6>Nome Calçado</h6>
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
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p1.jpg" alt="">
                        <div class="product-details">
                            <h6>Nome Calçado</h6>
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
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p4.jpg" alt="">
                        <div class="product-details">
                            <h6>Nome Calçado</h6>
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
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p1.jpg" alt="">
                        <div class="product-details">
                            <h6>Nome Calçado</h6>
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
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p8.jpg" alt="">
                        <div class="product-details">
                            <h6>Nome Calçado</h6>
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
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Novidades</h1>
                        <p>Calçados moda Infantil</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p1.jpg" alt="">
                        <div class="product-details">
                            <h6>Calçado 01</h6>
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
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p2.jpg" alt="">
                        <div class="product-details">
                            <h6>Calçado 02</h6>
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
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p3.jpg" alt="">
                        <div class="product-details">
                            <h6>Calçado 03</h6>
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
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p4.jpg" alt="">
                        <div class="product-details">
                            <h6>Calçado 04</h6>
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
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p5.jpg" alt="">
                        <div class="product-details">
                            <h6>Nome Calçados</h6>
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
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p6.jpg" alt="">
                        <div class="product-details">
                            <h6>Nome Calçado</h6>
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
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p7.jpg" alt="">
                        <div class="product-details">
                            <h6>NOME cALÇADOS</h6>
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
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidle de produtos -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p8.jpg" alt="">
                        <div class="product-details">
                            <h6>Nome Calçados</h6>
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">$210.00</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="sacola.html" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">asacola</p>
                                </a>

                                <a href="detalhes-produto.html" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">veja mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fim apresentação de produtos -->

<!-- Começo Area promoçao relâmpago-->
<section class="exclusive-deal-area">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 no-padding exclusive-left">
                <div class="row clock_sec clockdiv" id="clockdiv">
                    <div class="col-lg-12">
                        <h1>Oferta Relâmpago!</h1>
                        <p>descrição ....</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="row clock-wrap">
                            <div class="col clockinner1 clockinner">
                                <h1 class="days">150</h1>
                                <span class="smalltext">Dias</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="hours">23</h1>
                                <span class="smalltext">Horas</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="minutes">47</h1>
                                <span class="smalltext">Mins</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="seconds">59</h1>
                                <span class="smalltext">Secs</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="" class="primary-btn">Visualizar Ofertas</a>
            </div>
            <div class="col-lg-6 no-padding exclusive-right">
                <div class="active-exclusive-product-slider">
                    <!-- slide de oferta  -->
                    <div class="single-exclusive-slider">
                        <img class="img-fluid" src="img/product/e-p1.png" alt="">
                        <div class="product-details">
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">$210.00</h6>
                            </div>
                            <h4>NOME cALÇADO</h4>
                            <div class="add-bag d-flex align-items-center justify-content-center">
                                <a class="add-btn" href=""><span class="ti-bag"></span></a>
                                <span class="add-text text-uppercase">Comprar</span>
                            </div>
                        </div>
                    </div>
                    <!-- slide de oferta  -->
                    <div class="single-exclusive-slider">
                        <img class="img-fluid" src="img/product/e-p1.png" alt="">
                        <div class="product-details">
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">$210.00</h6>
                            </div>
                            <h4>NOME cALÇADO</h4>
                            <div class="add-bag d-flex align-items-center justify-content-center">
                                <a class="add-btn" href=""><span class="ti-bag"></span></a>
                                <span class="add-text text-uppercase">Comprar</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fim area promoção relampago-->



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
