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
            <td>Nome:</td>
            <td>Sobrenome:</td>
            <td>Idade:</td>
            <td>E-mail:</td>
            <td>Senha:</td>
        </tr>

        <tr>
            <td><?= $nome; ?></td>
            <td><?= $sobrenome; ?></td>
            <td><?= $idade; ?></td>
            <td><?= $email; ?></td>
            <td><?= $senha; ?></td>
        </tr>
    </table>
</body>
</html>