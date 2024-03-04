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
            <ul class="nav me-auto">
                <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2 active" aria-current="page">Cadastrar Equipe</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Editar Sobre</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Gerenciar Equipe</a></li>
            </ul>
            <ul class="nav">
                <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Entrar</a></li>
                <li class="nav-item">
                    <a href="#" class="nav-link link-body-emphasis">
                        Sair
                        <svg style="margin: 0 .5rem;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="container">
        <nav class="mt-3" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </nav>
    </section>

    <header data-bs-theme="dark" class="container my-4">
        <div class="p-4 text-center">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-grid-1x2-fill" viewBox="0 0 16 16">
                            <path d="M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1z"/>
                        </svg>
                        <h1 style="margin: 0 1rem;" class="text-body-emphasis">Painel de Controle</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-center align-items-center h-3">
                        <svg style="margin: 0 .5rem;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                        </svg>
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
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">Home</a>
                        <a href="#" class="list-group-item list-group-item-action">Sobre</a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between">
                            Equipe
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                    </tr>
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
</body>
</html>
