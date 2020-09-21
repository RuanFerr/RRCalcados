<div class="container container-fluid table-responsive">
    <table class="table table-primary table-striped">

        <thead class="thead-primary">
        <th>id</th>
        <th>Descrição</th>
        <th>preço</th>
        <th>quantidade</th>
        <th>categoria</th>
        <th>Ações</th>
        </thead>
        <tbody class="table-hover">
            <?php if (!empty($calcado) && is_array($calcado)): ?>
                <?php foreach ($calcado as $item): ?>
                    <tr>
                        <td>
                            <a>
                                <?php echo $item['id']; ?>
                            </a>
                        </td>
                        <td>
                            <a>
                                <?php echo $item['descricao']; ?>
                            </a>
                        </td>
                        <td>
                            <a>
                                <?php echo $item['preco']; ?>
                            </a>
                        </td>
                        <td>
                            <a>
                                <?php echo $item['qtde']; ?>
                            </a>
                        </td>
                        <td>
                            <a>
                                <?php echo $item['id_categoria']; ?>
                            </a>
                        </td>
                        <td>
                            <a href="<?php echo base_url('dashboard/updateCalcado/' . $item['id']); ?>"
                               class="btn btn-primary">
                                <span data-feather="edit"> <!-- Alterar aqui --> </span>
                            </a>
                            <a class="btn btn-danger" data-toggle="modal" data-target="#modalDeletar">
                                <span data-feather="trash"><!-- Deletar aqui --></span>
                            </a>
                            <!-- modal para deletar -->
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
                                            <a type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
                                            <a href="<?php echo base_url('dashboard/deleteCalcado/' . $item['id']); ?>" type="button" class="btn btn-danger">Excluir</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>