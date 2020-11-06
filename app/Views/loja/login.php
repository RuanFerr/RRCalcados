<!-- COmeço Banner de fundo -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Login/Registra-se</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Pagina Inicial<span class="lnr lnr-arrow-right"></span></a>
                    <a href="login.html">Login/Registra-se</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Fim Banner de Fundo-->

<!--================Começo Login =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="img/login.jpg" alt="">
                    <div class="hover">
                        <h4>É novo no nosso Web site?</h4>
                        <p>Realize suas compras de forma segura aqui. </p>
                        <a class="primary-btn" href="cadastro-cliente.html">Criar sua conta</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Entre na sua conta</h3>
                    <form class="row login_form" action="<?php echo base_url('home/logar'); ?>" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="senha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <input type="checkbox" id="f-option2" name="selector">
                                <label for="f-option2">Manter-me conectado</label>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Log In</button>
                            <a href="recuperar-senha.html">Esqueceu a senha?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Fim Login =================-->
