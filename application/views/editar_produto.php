<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="<?= base_url('produto/salvar_edicao'); ?>" method="post">
        <input type="hidden" name="id" value="<?= $produto['id'] ?>">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value="<?php  ?>">
        <br />
        <label for="custo">Custo Produto</label>
        <input type="number" id="custo" name="custo">
        <br />
        <label for="preco">Preço Produto</label>
        <input type="number" id="preco" name="preco">
        <br />
        <input type="submit" name="submit">
        ou
        <button>
            <?php echo anchor("produto/view", 'VER BD') ?>
        </button>
       <!-- <input type="hidden" value="<?php echo $produto['ID'] ?>"> -->
    </form>
   <!-- <form method="post" action="<?= base_url('produto/salvar_edicao') ?>">
    <input type="hidden" name="id" value="<?= $produto['id'] ?>">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="<?= $produto['nome'] ?>">
    <label for="custo">Custo:</label>
    <input type="text" name="custo" value="<?= $produto['custo'] ?>">
    <label for="preco">Preço:</label>
    <input type="text" name="preco" value="<?= $produto['preco'] ?>">
    <button type="submit">Atualizar</button> -->
</form>
</body>
</html>
