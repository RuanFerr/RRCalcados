
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
                                    <section class="lattest-product-area pb-40 category-list">
                                        <div class="row">
                                            <div class="col-lg-10 col-md-10">
                                                <div class="single-product">
                                                    <div class="product-details">
                                                        <h3>Cadastrar Calçado </h3>
                                                        <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                                                            <div class="col-md-12 form-group p_star">
                                                                <form>
                                                                    <div class="form-group">
                                                                        <br>
                                                                        <a>Adicionar imagem </a>
                                                                        <br>
                                                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                                                                <div class="col-md-12 form-group p_star">
                                                                    <input type="text" class="form-control" id="first" name="nomecalcado">
                                                                    <span class="placeholder" data-placeholder="Nome do Calçado"></span>
                                                                </div>
                                                                <div class="col-md-12 form-group">
                                                                    <input type="text" class="form-control" id="value" name="value" placeholder="valor">
                                                                </div>
                                                                <div class="col-md-6 form-group p_star">
                                                                    <div class="sorting">
                                                                        <select>
                                                                            <option value="1">Status</option>
                                                                            <option value="2">Em estoque </option>
                                                                            <option value="3">Indisponivel</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 form-group p_star">
                                                                    <div class="sorting">
                                                                        <select>
                                                                            <option value="1">Categoria</option>
                                                                            <option value="2">Feminino </option>
                                                                            <option value="3">Masculino</option>
                                                                            <option value="3">Infantil</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 form-group p_star">
                                                                    <input type="text" class="form-control" id="tamanho" name="tamanho">
                                                                    <span class="placeholder" data-placeholder="tamanho"></span>
                                                                </div>
                                                                <div class="col-md-6 form-group p_star">
                                                                    <input type="text" class="form-control" id="quantidade" name="quantidade">
                                                                    <span class="placeholder" data-placeholder="quantidade"></span>
                                                                </div>
                                                                <div class="col-md-12 form-group p_star">
                                                                    <input type="text" class="form-control" id="descricao" name="descrição">
                                                                    <span class="placeholder" data-placeholder="Breve descrição"></span>
                                                                </div>
                                                                <br><br>
                                                                <!--começo form descrição e especificação pag detalhes do produto -->
                                                                <!--descrição-->
                                                                <div class="col-md-12 form-group p_star">
                                                                    <a>Descrição </a>
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1">Escreva aqui uma descrição detalhada sobre o produto ofertado</label>
                                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                                <!--especificação de produto-->
                                                                <div class="col-md-12 form-group">
                                                                    <a>Especificações </a>
                                                                    <input type="text" class="form-control" id="largura" name="largura" placeholder="Largura">
                                                                </div>
                                                                <div class="col-md-12 form-group">
                                                                    <input type="text" class="form-control" id="altura" name="altura" placeholder="Altura">
                                                                </div>
                                                                <div class="col-md-12 form-group">
                                                                    <input type="text" class="form-control" id="profundidade" name="profundidade" placeholder="Profundidade">
                                                                </div>
                                                                <div class="col-md-12 form-group">
                                                                    <input type="text" class="form-control" id="peso" name="peso" placeholder="Peso">
                                                                </div>
                                                                <div class="col-md-12 form-group">
                                                                    <input type="text" class="form-control" id="qualidade" name="qualidade" placeholder="Qualidade">
                                                                </div>
                                                                <div class="col-md-12 form-group">
                                                                    <input type="text" class="form-control" id="tempoduracao" name="tempoduracao" placeholder="Tempo de duração">
                                                                </div>
                                                                <div class="col-md-12 form-group">
                                                                    <input type="text" class="form-control" id="tipoembalagem" name="tipoembalagem" placeholder="Tipo de embalagem">
                                                                </div>
                                                                <div class="col-md-12 form-group">
                                                                    <input type="text" class="form-control" id="contem" name="contem" placeholder="Contém">
                                                                </div>
                                                                <!--fim form descrição e despecificações do produto pag detalhes do produto -->
                                                                <div>
                                                                    <br>
                                                                    <a class="primary-btn" href="aviso-confirmacao-cadastro.html">Casdastrar</a>
                                                                </div>
                                                            </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </section>
                                <!--fim form cadastro pag detalhes do produto-->
                                </div>
                                </div>

