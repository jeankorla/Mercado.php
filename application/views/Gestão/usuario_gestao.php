<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Usuario</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome:</th>
            <th>Sobrenome:</th>
            <th>Idade:</th>
            <th>E-mail:</th>
            <th>Senha:</th>
        </tr>

        
        <?php foreach ($usuarios as $usuario) : ?>
        <tr>
            <th><?= $usuario['ID'] ?></th>
            <th><?= $usuario['NOME'] ?></th>
            <th><?= $usuario['SOBRENOME'] ?></th>
            <th><?= $usuario['IDADE'] ?></th>
            <th><?= $usuario['EMAIL'] ?></th>
            <th><?= $usuario['SENHA'] ?></th>
        </tr>
    <?php endforeach; ?>
       
    </table>
</body>
</html>