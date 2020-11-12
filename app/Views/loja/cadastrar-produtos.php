
                                <!-- Começo menu gerenciar calçados  -->
                                <div class="col-xl-9 col-lg-8 col-md-7">
                                    <div class="filter-bar d-flex flex-wrap align-items-center">
                                        <div class="sorting">
                                            <button  type="submit" value="submit" class="primary-btn"><a href="<?php echo base_url('dashboard/cadastroCalcado'); ?>">cadastrar</a></button>
                                        </div>
                                        <div class="sorting mr-auto">
                                            <button type="submit" value="submit" class="primary-btn"><a href="<?php echo base_url('dashboard/listarCalcadosCadastrados'); ?>">cadastrados</a></button>
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
                                                        <form class="row contact_form" action="<?php echo base_url("dashboard/saveCalcado"); ?>" method="POST" enctype="multipart/form-data">
                                                            <div class="col-md-12 form-group p_star">
                                                                <br> <a>Adicionar imagem </a> <br>
                                                                <input type="file" class="form-control-file" name="img">
                                                            </div>

                                                            <div class="col-md-12 form-group p_star">
                                                                <input required="true" type="text" class="form-control" id="nome" name="nome">
                                                                <span class="placeholder" data-placeholder="Nome do Calçado"></span>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <input required="true" type="text" class="form-control" id="preco" name="preco" placeholder="valor">
                                                            </div>
                                                            <div class="col-md-6 form-group p_star">
                                                                <div class="sorting">
                                                                    <select name="status" id="status">
                                                                        <option value="">Status</option>
                                                                        <option value="em estoque">Em estoque </option>
                                                                        <option value="indisponivel">Indisponivel</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 form-group p_star">
                                                                <div class="sorting">
                                                                    <select required="true" name="id_categoria" id="id_categoria">
                                                                        <option value="">Categoria</option>

                                                                        <!-- Inserindo opções de categorias a partir da busca feita pelo controller em controllers/cashboard: 32  -->
                                                                        <?php if (!empty($categoria) && is_array($categoria)): ?>
                                                                            <?php foreach ($categoria as $item): ?>
                                                                                <option value="<?php echo $item['id']; ?>"><?php echo $item['descricao']; ?> </option>

                                                                            <?php endforeach; ?>
                                                                        <?php endif; ?>

                                                                        <!--
                                                                        <option value="1">Feminino </option>
                                                                        <option value="2">Masculino</option>
                                                                        <option value="3">Infantil</option>
                                                                        -->
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 form-group p_star">
                                                                <input required="true" type="text" class="form-control" id="tamanho" name="tamanho">
                                                                <span class="placeholder" data-placeholder="tamanho"></span>
                                                            </div>
                                                            <div class="col-md-6 form-group p_star">
                                                                <input required="true" type="text" class="form-control" id="qtde" name="qtde">
                                                                <span class="placeholder" data-placeholder="quantidade"></span>
                                                            </div>
                                                            <div class="col-md-12 form-group p_star">
                                                                <input required="true" type="text" class="form-control" id="breve_descricao" name="breve_descricao">
                                                                <span class="placeholder" data-placeholder="Breve descrição"></span>
                                                            </div>
                                                            <br><br>
                                                            <!--começo form descrição e especificação pag detalhes do produto -->
                                                            <!--descrição-->
                                                            <div class="col-md-12 form-group p_star">
                                                                <a>Descrição </a>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlTextarea1">Escreva aqui uma descrição detalhada sobre o produto ofertado</label>
                                                                    <textarea required="true" class="form-control" id="descricao" name="descricao" rows="3"></textarea>
                                                                </div>
                                                            </div>
                                                            <!--especificação de produto-->
                                                            <div class="col-md-12 form-group">
                                                                <a>Especificações </a>
                                                                <input required="true" type="text" class="form-control" id="largura" name="largura" placeholder="Largura">
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <input required="true" type="text" class="form-control" id="altura" name="altura" placeholder="Altura">
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <input required="true" type="text" class="form-control" id="profundidade" name="profundidade" placeholder="Profundidade">
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <input required="true" type="text" class="form-control" id="peso" name="peso" placeholder="Peso">
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <input required="true" type="text" class="form-control" id="qualidade" name="qualidade" placeholder="Qualidade">
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <input required="true" type="text" class="form-control" id="tempo_duracao" name="tempo_duracao" placeholder="Tempo de duração">
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <input required="true" type="text" class="form-control" id="tipo_embalagem" name="tipo_embalagem" placeholder="Tipo de embalagem">
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <input required="true" type="text" class="form-control" id="contem" name="contem" placeholder="Contém">
                                                            </div>
                                                            <!--fim form descrição e despecificações do produto pag detalhes do produto -->
                                                            <div>
                                                                <br>
                                                                <button type="submit" class="primary-btn" >Casdastrar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section><!--switch aqui-->
                                </div> <!--switch aqui-->
                                <!--fim form cadastro pag detalhes do produto-->
                                </div>
                                </div>

