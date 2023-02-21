<table>
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Tamanho</td>
        <td>Cor</td>
    </tr>

    <?php foreach ($camisas as $camisa) : ?>
        <tr>
            <td><?= $camisa['ID'] ?></td>
            <td><?= $camisa['NOME'] ?></td>
            <td><?= $camisa['TAMANHO'] ?></td>
            <td><?= $camisa['COR'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>