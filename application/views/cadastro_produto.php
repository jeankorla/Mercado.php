<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="<?= base_url('produto/cadastro'); ?>" method="post">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Escreva o nome do produto">
        <br />
        <label for="custo">Custo Produto</label>
        <input type="number" id="custo" name="custo">
        <br />
        <label for="preco">Preço Produto</label>
        <input type="number" id="preco" name="preco">
        <br />
        <input type="submit" name="submit">
    </form>
</body>
</html>