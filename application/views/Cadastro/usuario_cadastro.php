

    <form action="<?= base_url('Usuario/cadastro') ?>" method="post">

        <!-- NOME -->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <br>

        <!-- SOBRENOME -->
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome">
        <br>

        <!-- IDADE -->
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade">
        <br>

        <!-- EMAIL -->
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email">
        <br>

        <!-- SENHA -->
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha">
        <br>

        <input type="submit" value="salvar">
    </form>
