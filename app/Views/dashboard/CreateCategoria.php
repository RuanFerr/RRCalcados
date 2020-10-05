<div class="alert-danger">
    <?php echo \config\services::validation()->listErrors() ?>
</div>
<?php
$categoria_item = [
    "id" => '',
    "descricao" => ''
];
if (isset($categoria)) :
    $categoria_item = $categoria;
endif;
?>
<div class="container">
    <?php if (isset($sucess)) : ?>
        <div class="alert alert-success" role="alert">
            <?php echo $sucess ?>
        </div>
    <?php endif; ?>
</div>
<div class="form">
    <!-- formulario de cadastro de categoria. Algo a mais para adicionar? PERGUNTE-->
    <form action="<?php echo base_url('dashboard/saveCategoria') ?>" method="POST">

        <div class="form-group">
            <label for="descricao"> Descrição </label>
            <input type="text" id="descricao" name="descricao" 
                   value='<?php echo $categoria_item['descricao'] ?>' placeholder="descrição">
        </div>

        <div class="form-group">
            <input type="hidden" id="id" name="id" value="<?php echo $categoria_item['id'] ?>">
        </div>

        <div>
            <input type='submit' name='cadastrar' id='cadastrar' class='btn btn-primary' 
                   value="cadastrar">
        </div>

    </form>

</div>