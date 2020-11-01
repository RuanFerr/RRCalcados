
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
                            <?php if (!session()->has('email')) { ?>
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