<?php

use App\Models\Calcado; ?>
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
                            <img class="img-fluid w-100" src="<?php echo base_url('assets/img/category/c1.jpg'); ?>" alt="">
                            <a href="<?php echo base_url('assets/img/category/c1.jpg'); ?>" class="img-pop-up" target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">Feminino</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="<?php echo base_url('assets/img/category/c2.jpg'); ?>" alt="">
                            <a href="<?php echo base_url('assets/img/category/c2.jpg'); ?>" class="img-pop-up" target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">Infantil</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="<?php echo base_url('assets/img/category/c3.jpg'); ?>" alt="">
                            <a href="<?php echo base_url('assets/img/category/c3.jpg'); ?>" class="img-pop-up" target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">Masculino</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="<?php echo base_url('assets/img/category/c4.jpg'); ?>" alt="">
                            <a href="<?php echo base_url('assets/img/category/c4.jpg'); ?>" class="img-pop-up" target="_blank">
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
                    <img class="img-fluid w-100" src="<?php echo base_url('assets/img/category/c5.jpg'); ?>" alt="">
                    <a href="<?php echo base_url('assets/img/category/c5.jpg'); ?>" class="img-pop-up" target="_blank">
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
    <?php if (isset($categorias) && is_array($categorias)) : ?>
        <?php foreach ($categorias as $categoriaItem) : ?>
            <div class="single-product-slider">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <div class="section-title">
                                <h1>Novidades</h1>
                                <p>Calçados <?php echo $categoriaItem['descricao']; ?> </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php $calcadoModel = new Calcado(); ?>
                        <?php $calcados = $calcadoModel->searchCategoria($categoriaItem['id']); ?>
                        <?php if (isset($calcados) && is_array($calcados)) : ?>
                            <?php foreach ($calcados as $calcadoItem) : ?>
                                <!-- sidle de produtos -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-product">
                                        <img class="img-fluid" src="img/product/p5.jpg" alt="">
                                        <div class="product-details">
                                            <h6><?php echo $calcadoItem['nome']; ?></h6>
                                            <div class="price">
                                                <h6><?php echo $calcadoItem['preco']; ?></h6>
                                                <h6 class="l-through"><?php echo $calcadoItem['preco']; ?></h6>
                                            </div>
                                            <div class="prd-bottom">

                                                <a href="<?php echo base_url('ClienteController/addSacola/'.$calcadoItem['id']); ?>" class="social-info">
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
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div> 
        <?php endforeach; ?>
    <?php endif; ?>
</section>

<!-- Fim apresentação de produtos -->


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
