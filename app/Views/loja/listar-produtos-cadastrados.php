<?php

use App\Models\Categoria;

$categoria = new Categoria();
?>
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

                                                            <?php if (!empty($calcados) && is_array($calcados)): ?>
                                                                <?php foreach ($calcados as $calcado): ?>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="media">
                                                                                <div class="d-flex">
                                                                                    <img src="<?php echo $calcado['url_img'] ?>" alt="">
                                                                                </div>
                                                                                <div class="media-body">
                                                                                    <p><?php echo $calcado['nome'] ?></p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <!-- PREÇO -->
                                                                        <td>
                                                                            <h5><?php echo $calcado['preco'] ?></h5>
                                                                        </td>
                                                                        <td>
                                                                            <!-- QUANTIDADE -->
                                                                            <div class="product_count">
                                                                                <h5><?php echo $calcado['qtde'] ?></h5>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <!-- CATEGORIA -->
                                                                            <div class="product_count">
                                                                                <h5><?php
                                                                                    $cat = $categoria->search($calcado['id_categoria']);
                                                                                    echo $cat['descricao'];
                                                                                    ?></h5>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="product_count">
                                                                                <h5><a data-toggle="modal" data-target="#modalDeletar">excluir</a></h5>
                                                                                <div class="modal fade" id="modalDeletar" tabindex="-1" role="dialog" aria-labelledby="labelDeletar" aria-hidden="true">
                                                                                    <div class="modal-dialog" role="document">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title" id="labelDeletar">Excluir registro</h5>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                Deseja excluir este registro?
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <a type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</a>
                                                                                                <a href="<?php echo base_url('dashboard/deleteCalcado/' . $calcado['id']); ?>" type="button" class="btn btn-danger">Excluir</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>

                                                            <!--
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
                                                            -->
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

