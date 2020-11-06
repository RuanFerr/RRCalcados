
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
<div class="container">
    <!-- Começo Banner de fundo -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Cadastro</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Página Inicial<span class="lnr lnr-arrow-right"></span></a>
                        <a href="cadastro-cliente.html">cadastro<span class="lnr lnr-arrow-right"></span></a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Fim de Banner de Fundo -->

    <!-- Possivel mensagem de erro aqui -->
    <div class="container danger">
        <?php echo \config\services::validation()->listErrors() ?>
    </div>
    <!-- Fim da mensagem de erro -->

    <!--Começo Formulário de cadastro-->
    <div class="cadastro">
        <div class="row">
            <div class="col-lg-12">
                <h3>Cadastre-se </h3>
                <form class="row contact_form" action="<?php echo base_url('ClienteController/save') ?>" method="post">

                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id" value="">
                    </div>

                    <div class="col-md-6 form-group p_star">
                        <div><h6>Nome:</h6></div>
                        <input type="text" class="form-control" id="nome" name="nome" required="true">
                        <span class="placeholder" data-placeholder=""></span>
                    </div>
                    <div class="col-md-6 form-group p_star">
                        <div><h6>sobrenome:</h6></div>
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome" required="true">
                        <span class="placeholder" data-placeholder=""></span>
                    </div>
                    <div class="col-md-6 form-group p_star">
                        <div><h6>CPF:</h6></div>
                        <input type="text" class="form-control" id="cpf" name="cpf"  required="true">
                        <span class="placeholder" data-placeholder=""></span>
                    </div>
                    <div class="col-md-6 form-group p_star">
                        <div><h6>Data de nascimento:</h6></div>
                        <input type="text" class="form-control" id="data_nasc" name="data_nasc" required="true">
                        <span class="placeholder" data-placeholder=""></span>
                    </div>
                    <div class="col-md-12 form-group p_star">
                        <div><h6>Email:</h6></div>
                        <input type="text" class="form-control" id="email" name="email" required="true">
                        <span class="placeholder" data-placeholder=""></span>
                    </div>
                    <div class="col-md-6 form-group p_star">
                        <div><h6>Senha:</h6></div>
                        <input type="password" class="form-control" id="senha" name="senha" required="true">
                        <span class="placeholder" data-placeholder=""></span>
                    </div>
                    <div class="col-md-6 form-group p_star">
                        <div><h6>confirmar Senha:</h6></div>
                        <input type="password" class="form-control" id="senha" name="confirmar_senha" required="true">
                        <span class="placeholder" data-placeholder=""></span>
                    </div>
                    <div class="col-md-12 form-group p_star">
                        <div><h6>Telefone:</h6></div>
                        <input type="text" class="form-control" id="telefone" name="telefone" required="true">
                        <span class="placeholder" data-placeholder=""></span>
                    </div>

                    <div class="col-md-6 form-group p_star">
                        <div><h6>Endereço:</h6></div>
                        <input type="text" class="form-control" id="endereco" name="endereco" required="true">
                        <span class="placeholder" data-placeholder=""></span>
                    </div>
                    <div class="col-md-6 form-group">
                        <div><h6>complemento:</h6></div>
                        <input type="text" class="form-control" id="complemento" name="complemento" 
                               placeholder="">
                    </div>

                    <div class="col-md-6 form-group p_star">
                        <select class="country_select" id="pais" name="pais">
                            <option value="País">País</option>
                            <option value="Brasil">Brasil</option>
                        </select>
                    </div>
                    <div class="col-md-3 form-group p_star">
                        <select class="state_select" id="estado" name="estado">
                            <option value="Estado">Estado</option>
                            <option value="Ceará">Ceará</option>
                        </select>
                    </div>
                    <div class="col-md-3 form-group p_star">
                        <input type="text" class="form-control" id="cidade" name="cidade" required="true">
                        <span class="placeholder" data-placeholder=""></span>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" required="true">
                    </div>
                    <div class="creat_account">
                        <input type="checkbox" id="terms" name="terms">
                        <label for="f-option4">Eu li e aceito os termos </label>
                        <a href="termos-aceitacao.html">termos & condições</a>
                    </div>	
                    <br><br>
                    <div>
                        <br>
                        <button type="submit" id="btnCriar" disabled class="btn primary-btn">Criar Conta </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<!--Fim Formulário de cadastro-->
<script>
    var checkbox = document.getElementById('terms');
    var btn = document.getElementById('btnCriar');
    checkbox.onclick = function () {
        if (checkbox.checked) {

            btn.removeAttribute('disabled');
        } else {
            btn.setAttribute('disabled', '');
        }
    };
</script>