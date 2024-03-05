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
    <link href="css/style.css" rel="stylesheet" />
</head>
<body data-bs-theme="dark">
    <nav data-bs-theme="dark" class="py-2 bg-body-tertiary border-bottom">
        <div class="container d-flex flex-wrap">
            <ul id="menu-principal" class="nav me-auto">
                <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2" ref_sys="menu_sobre">Editar Sobre</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2" ref_sys="menu_cadastrar">Cadastrar Equipe</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2" ref_sys="menu_gerenciar">Listar Equipe</a></li>
            </ul>
            <ul id="menu-autenticacao" class="nav">
                <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Entrar</a></li>
                <li class="nav-item">
                    <a href="#" class="nav-link link-body-emphasis">
                        Sair <img class="ml-2" src="./icons/exit.svg" />
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <header data-bs-theme="dark" class="container my-4">
        <div class="p-4 text-center">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="./icons/painel.svg" />
                        <h1 style="margin: 0 1rem;" class="text-body-emphasis">Painel de Controle</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-center align-items-center h-3">
                        <img style="margin: 0 1rem;" src="./icons/clock.svg" />
                        <p style="margin: 0;">Seu último login foi em:</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div data-bs-theme="dark" class="container my-4">
        <div class="p-3 text-center bg-body-tertiary rounded-3">
            <h3 class="text-body-emphasis">Home</h3>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div id="menu-lateral" class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true" ref_sys="menu_sobre">
                            Sobre
                        </a>
                        <a href="#" class="list-group-item list-group-item-action" ref_sys="menu_cadastrar">
                            Cadastrar equipe
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between" ref_sys="menu_gerenciar">
                            Listar equipe
                            <span class="badge rounded-pill text-bg-light">2</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">Sobre</div>
                        <div class="card-body">
                            <form>
                                <div class="form-group mb-3">
                                    <h5 class="card-title">Código HTML:</h5>
                                    <textarea style="height: 150px; resize: vertical;" class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-header">Cadastrar Equipe</div>
                        <div class="card-body">
                            <form>
                                <div class="form-group mb-3">
                                    <h5 class="card-title">Membro da equipe:</h5>
                                    <input type="text" name="nome_membro" class="form-control" />
                                </div>
                                <div class="form-group mb-3">
                                    <h5 class="card-title">Descrição do membro:</h5>
                                    <textarea style="height: 150px; resize: vertical;" class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-header">Membros da Equipe</div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nome do membro</th>
                                        <th scope="col">Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < 3; $i++) { ?>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>

                                                <button type="button" class="btn btn-danger">
                                                    <img src="./icons/trash.svg" class="" />
                                                    Excluir
                                                </button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://releases.jquery.com/git/jquery-3.x-git.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(function () {

            cliqueMenu();
            scrollItem();

            function cliqueMenu() {
                $('#menu-principal a, #menu-lateral a, #menu-autenticacao a').click(function () {
                    // remove active de todos os itens
                    $('#menu-principal a, #menu-lateral a, #menu-autenticacao a').removeClass('active')
                    // adiciona active apenas no item clicado
                    $('#menu-lateral a[ref_sys=' + $(this).attr('ref_sys') + ']').first().addClass('active');
                    return false;
                })
            }

            function scrollItem() {
                $('#menu-principal a, #menu-lateral a, #menu-autenticacao a').click(function () {
                    const ref = '#' + $(this).attr('ref_sys') + '_section';
                    const offset = $(ref).offset().top
                    $('html,body').animate({'scrollTop': offset})
                });
            }

        })
    </script>
</body>
</html>
