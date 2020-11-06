
<!-- Começo Banner de fundo -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Detalhes do produto</h1>
                <nav class="d-flex align-items-center">
                    <a href="<?php echo base_url('home'); ?>">Loja<span class="lnr lnr-arrow-right"></span></a>
                    <a href="<?php echo base_url('home/produto/' . $calcado['id']); ?>">Detalhes do Produto<span class="lnr lnr-arrow-right"></span></a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Fim de Banner de Fundo -->



<!--================Começo  Apresentação do Produto=================-->
<div class="product_image_area">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">
                <div class="s_Product_carousel">
                    <div class="single-prd-item">
                        <img class="img-fluid" src="<?php echo base_url($calcado['url_img']); ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h3><?php echo $calcado['nome']; ?></h3>
                    <h2>R$ <?php echo $calcado['preco']; ?></h2>
                    <ul class="list">
                        <li><a class="active" href="#"><span>Categoria</span> :<?php echo $categoria['descricao']; ?> </a></li>
                        <li><a href="#"><span>Status</span> : <?php echo $calcado['status']; ?></a></li>
                    </ul>
                    <p> <?php echo $calcado['breve_descricao']; ?> </p> 
                    <form action="<?php echo base_url('clienteController/addSacolaQtde'); ?>" method="POST">
                        <div class="product_count">
                            <label for="qty">Quantidade:</label>

                            <input type="hidden" name="idProduto" id='idProduto' value="<?php echo $calcado['id']; ?>">

                            <input type="text" name="qtde" id="qtde" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                            <button onclick="var result = document.getElementById('qtde');
                                    var qtde = result.value;
                                    if (!isNaN(qtde))
                                        result.value++;
                                    return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                            <button onclick="var result = document.getElementById('qtde');
                                    var qtde = result.value;
                                    if (!isNaN(qtde) & qtde > 1)
                                        result.value--;
                                    return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                        </div>
                        <div class="card_area d-flex align-items-center">
                            <button class="primary-btn" type="submit">Adicionar a sacola</button>
                            <a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================Fim apresentação do produto =================-->

<!--================Descrição do Produto =================-->
<section class="product_description_area">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Descrição</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Especificações</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p><?php echo $calcado['descricao']; ?></p>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <h5>Largura</h5>
                                </td>
                                <td>
                                    <h5><?php echo $calcado['largura']; ?>mm</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Altura</h5>
                                </td>
                                <td>
                                    <h5><?php echo $calcado['altura']; ?>mm</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Profundidade</h5>
                                </td>
                                <td>
                                    <h5><?php echo $calcado['profundidade']; ?>mm</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Peso</h5>
                                </td>
                                <td>
                                    <h5><?php echo $calcado['peso']; ?> g</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Qualidade</h5>
                                </td>
                                <td>
                                    <h5><?php echo $calcado['qualidade']; ?></h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Tempo de duração</h5>
                                </td>
                                <td>
                                    <h5><?php echo $calcado['tempo_duracao']; ?></h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Tipo de embalagem</h5>
                                </td>
                                <td>
                                    <h5><?php echo $calcado['tipo_embalagem']; ?></h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Contém</h5>
                                </td>
                                <td>
                                    <h5><?php echo $calcado['contem']; ?></h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</section>
</div>
<!--================fIM DESCRIÇÃO DO PRODUTO=================-->

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