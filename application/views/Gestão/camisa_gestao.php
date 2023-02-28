<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Gestão</title>
</head>
<body>
    <hr>
    <form action="<?= base_url('produto/view'); ?>" method="post">
<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Tamanho</th>
        <th>Cor</th>
    </tr>

    <?php foreach ($camisas as $camisa) : ?>
        <tr>
            <th><?= $camisa['ID'] ?></th>
            <th><?= $camisa['NOME'] ?></th>
            <th><?= $camisa['TAMANHO'] ?></th>
            <th><?= $camisa['COR'] ?></th>
            <th>
                <a href="<?php echo base_url("camisa/excluir/{$camisa['ID']}"); ?>" class="btn btn-danger" >Excluir</a>
            </th>
        </tr>
    <?php endforeach; ?>
    
</table>
</body>
</html>