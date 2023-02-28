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
            <th>Nome:</th>
            <th>Custo:</th>
            <th>Valor:</th>
            <th>Ações:</th>
        </tr>
        
        <?php foreach ($produtos as $produto) : ?>
        <tr>
            <th><?= $produto['ID'] ?></th>
            <th><?= $produto['NOME'] ?></th>
            <th><?= $produto['CUSTO'] ?></th>
            <th><?= $produto['PRECO'] ?></th>
            <th>
            <a href="<?php echo base_url("produto/editar/{$produto['ID']}"); ?>"class="btn btn-sucess">Editar</a>
            </th>
            <th>
            <a href="<?php echo base_url("produto/excluir/{$produto['ID']}");?>" class="btn btn-danger">Excluir</a>
            </th>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>