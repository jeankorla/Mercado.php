<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost:80/img/">
    <title>Mercado</title>
</head>
<body>

<form>
<p>
    <label for="nome">Nome do Produto:</label>
    <input type="text" name="nome" id="nome" required>
</p>

<p>
    <input type="radio" name="pgt" id="debito" value="debito">
    <label for="debito">Débito</label>
    <br>
    <input type="radio" name="pgt"  id="credito" value="credito">
    <label for="credito">Crédito</label>
    <br>
    <input type="radio" name="pgt"  id="dinheiro" value="dinheiro"> 
    <label for="dinheiro">Dinheiro</label>
</p>

<p>
    <label for="">Escolha uma cor:</label>
    <input type="color" name="cor" id="cor">
</p>

<p>
    <label for="data">Escolha a data de envio:</label>
    <input type="date" name="data" id="data">
</p>

<p>
    <label for="arquivo">Envie a foto do comprovante:</label>
    <input type="file" name="arquivo" id="arquvio">

</p>
    <label for="select">Informe a quantidade:</label>
    <select name="select" id="select">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
<p>
    <img src="suco.png">
</p>
<input type="submit" value="Salvar">



</form>


<script>


</script>




</body>
</html>