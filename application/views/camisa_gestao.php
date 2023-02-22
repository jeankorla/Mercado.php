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
        </tr>
    <?php endforeach; ?>
</table>