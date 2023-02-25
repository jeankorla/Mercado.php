<table class="table table-hover table-bordered border-dark shadow w-75">
    <thead class="table-dark">
        <tr>
            <th>Ações</th>
            <th>ID</th>
            <th>Nome</th>
            <th>Tamanho</th>
            <th>Cor</th>
        </tr>
    </thead>
        
    <tbody class="table-light">
        <?php foreach ($camisas as $camisa) : ?>
            <tr>
                <th><?=
                    "<button type='button' class='btn btn-success'><i class='bi bi-check-lg'></i></button>
                    <button type='button' class='btn btn-danger'><i class='bi bi-x-lg'></i></button>"
                ?></th>
                <th><?= $camisa['ID'] ?></th>
                <th><?= $camisa['NOME'] ?></th>
                <th><?= $camisa['TAMANHO'] ?></th>
                <th><?= $camisa['COR'] ?></th>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>