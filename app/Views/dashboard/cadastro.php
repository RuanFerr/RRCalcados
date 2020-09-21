<h2> <?php echo isset($id) ? "Editar Calcado" : "Cadastrar Calcado" ?> </h2>
<div class="alert-danger">
    <?php echo \config\services::validation()->listErrors() ?>
</div>
<?php
$calcado_item = [
    "id" => '',
    "descricao" => '',
    "qtde" => '',
    "preco" => '',
    "id_categoria" => '',
];
if (isset($calcado)) :
    $calcado_item = $calcado;
endif;
?>
<?php if (isset($sucess)) { ?>
    <div class="row container">
        <div class="alert alert-sucess">
            <h1>Salvo com sucesso</h1>
        </div>
    </div>
<?php } ?>
<div class="form">
    <form action="<?php echo base_url('dashboard/saveCalcado') ?>" method="POST">
        <div class="text-justify">
            <div class="form-group">
                <label for="descricao">Descrição </label>
                <input type="text" class="form-control" name="descricao" id="descricao"
                       value="<?php echo $calcado_item["descricao"]; ?>">
            </div>
            <div class="form-group">
                <label for="qtde">Quantidade </label>
                <input type="number" class="form-control" name="qtde" id="qtde"
                       value="<?php echo $calcado_item["qtde"]; ?>">
            </div>
            <div class="form-group">
                <label for="preco">Preço </label>
                <input type="number" class="form-control" name="preco" id="preco"
                       value="<?php echo $calcado_item["preco"]; ?>">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" name="id_categoria" id="id_categoria" 
                       value="<?php echo $calcado_item["id_categoria"]; ?>">
            </div>
            <?php if (isset($calcado_item['id'])) : ?>
                <div>
                    <input type="hidden" class="form-control" name="id" id="id" 
                           value="<?php echo $calcado_item["id"] ?>">
                </div>
            <?php endif; ?>
            <div>
                <input type='submit' name='cadastrar' id='cadastrar' class='btn btn-primary' value="cadastrar">
            </div>
        </div>
    </form>
</div>