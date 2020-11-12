<?php

use App\Models\Categoria;

$categoria = new Categoria();
?>


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

