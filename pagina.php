<?php

    $pdo = new PDO('mysql:host=localhost:3306;dbname=app_cms', 'root', 'password');
    $sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");
    $sobre->execute();
    $sobre = $sobre->fetch()["sobre"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de controle</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/pagina.css" rel="stylesheet" />
    <meta name="theme-color" content="#7952b3">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>
<body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
            <h3 class="float-md-start mb-0">Logo</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#">Sobre</a>
                <a class="nav-link" href="#">Contato</a>
            </nav>
            </div>
        </header>

        <hr />

        <main class="py-5 my-5">
            <h1>Título da página</h1>
            <p class="lead">Conteúdo da home</p>
            <p class="lead">
                <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white text-black">Link</a>
            </p>
        </main>

        <hr />

        <main class="py-5 my-5">
            <h1>Sobre</h1>
            <p class="lead"><?php echo $sobre ?></p>
            <p class="lead">
                <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white text-black">Link</a>
            </p>
        </main>
    </div>
</body>