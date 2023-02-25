<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="<?= base_url("assets/style.css") ?>">

    <title>Cadastro de Usuario</title>

</head>

<body>

    <div class="bg-dark px-4 shadow" id="navbar">
        
        <a
            class="text-white h-100"
            style="font-size: 2.25rem; margin-top: 0.5rem;"
            href="<?= base_url('Home') ?>"
        >MERCADO</a>

        <div class="d-flex justify-content-around" style="width: 20rem;">
            <a class="text-white" href="<?= base_url('Produto') ?>"> Produto</a>
            <a class="text-white" href="<?= base_url('Camisa') ?>"> Camisa</a>
            <a class="text-white" href="<?= base_url('Usuario') ?>"> Usuario</a>
        </div>

    </div>

    <div id="background">