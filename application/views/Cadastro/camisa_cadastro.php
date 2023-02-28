<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Camisa Cadastro</title>
</head>
<body>
    <form action="<?= base_url('Camisa/create') ?>" method="post">
        
        <!-- NOME  -->
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Nome da marca">
        <br>

        <!-- TAMANHO  -->
        <label for="tamanho">Tamanho</label>
        <select name="tamanho" id="tamanho">
            <option value="p">Tamanho P</option>
            <option value="m">Tamanho M</option>
            <option value="g">Tamanho G</option>
            <option value="gg">Tamanho GG</option>
        </select>
        <br>

        <!-- COR -->
        <label for="cor">Cor:</label>
        <input type="color" name="cor" id="cor">
        <br>

        <input type="submit">
        ou
        <button>
            <?php echo anchor("camisa/view", 'VER BD') ?>
        </button>
    </form>
</body>
</html>