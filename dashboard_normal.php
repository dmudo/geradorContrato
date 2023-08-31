<?php
include('protect.php');
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <title>Painel de Controle</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--Deixar apagina responsiva -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico">
    <!--<link href="css/index.css" rel="stylesheet" type='text/css'>-->
    <!--FOntes Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!--Icones Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

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

<body>

<header class="navbar navbar-dark sticky-top  bg-dark flex-md-nowrap p-0 shadow" style="background-color: #cfe2ff;">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3">Bem vindo! <?php echo $_SESSION['nome']; ?></a>
    <!--campo pesquisa
    <input class="form-control form-control-dark w-100" type="text" placeholder="Pesquisa" aria-label="Search">
     -->
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="img/pessoa.png" alt="" width="42" height="42" class="rounded-circle me-2">
        <strong>Colaborador</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
        <li><a class="dropdown-item" href="#">Configuração</a></li>
        <li><a class="dropdown-item" href="perfil.php">Perfil</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="sair.php">Sair</a></li>
      </ul>
    </div>
    </div>
    </div>
  </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <br>
                        <br>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-database" style="font-size: 1.4rem; color: #6495ED;"></i> Equipamentos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-database-fill-add" style="font-size: 1.4rem; color: #6495ED;"></i> Add Equipamentos
                            </a>
                        </li>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Nome</th>
                                <th scope="col">Estabelecimento</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">telefone</th>
                                <th scope="col">email</th>
                                <th scope="col">Arquivos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Fulano</td>
                                <td>Independência</td>
                                <td>Gerente</td>
                                <td>65 99999-9999</td>
                                <td>fulano@tropicalpneus.com.br</td>
                                <td><i class="bi bi-filetype-jpg" style="font-size: 1.5rem; color: #DC143C;"></i><i class="bi bi-filetype-pdf" style="font-size: 1.5rem; color: cornflowerblue;"></i><i class="bi bi-filetype-mp4" style="font-size: 1.5rem; color: #006400" ;></i></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Siclano</td>
                                <td>Perimetral</td>
                                <td>Vendedor</td>
                                <td>62 99999-9999</td>
                                <td>Siclano@tropicalpneus.com.br</td>
                                <td><i class="bi bi-filetype-pdf" style="font-size: 1.5rem; color: cornflowerblue;"></i><i class="bi bi-filetype-mp4" style="font-size: 1.5rem; color: #006400" ;></i></td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>