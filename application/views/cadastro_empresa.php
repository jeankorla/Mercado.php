<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    <form action="<?= base_url('Empresa/create') ?>" method="post">

        <label for="nome"> Nome da Empresa: </label>
            <input type="text" name="nome" id="nome">
        <br>
        
        <label for="cnpj">CNPJ:</label>
            <input type="number" id="cnpj1" name="cnpj">
        <br>

        <input type="submit">

    </form>
</body>
</html>