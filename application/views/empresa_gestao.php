<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>NOME: </th>
            <th>CNPJ: </th>
        </tr>
        <tr>
            <th><?= $nome; ?></th>
            <th><?= $cnpj; ?></th>
        </tr>
    </table>
</body>
</html>