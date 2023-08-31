
<?php 
session_start();
?>


<!DOCTYPE html>
<html>

<head>
    <title>Gerador de Contrato</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--Deixar apagina responsiva -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="imagens/favicon.ico">
    <!--<link href="css/index.css" rel="stylesheet" type='text/css'>-->
    <!--FOntes Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <style>
        <?php include 'css/style.css'; ?>
    </style>
</head>
<?php  include 'bd/conexao.php'; ?>

<?php include 'postlogin.php'; ?>

<body>
    <?php /* include 'navbar.php'; */ ?>

    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            
       
            <div class="col-md-10 mx-auto col-lg-5">

                <form class="p-4 p-md-5 border rounded-3 bg-light" action="" method="POST">
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput">
                        <label for="floatingInput">Endereço de email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="senha" class="form-control" id="floatingPassword">
                        <label for="floatingPassword">Senha</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Lembrar-me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
                    <hr class="my-4">
                    <h2 class="fs-5 fw-bold mb-3" style="text-align: center;">Cadastro</h2>
                    <a href="cadastro.php" target="_blank" class="w-100 py-2 mb-2 btn btn-outline-dark rounded-3" type="submit">Cadastro novo acesso</a>
                </form>

            </div>
        </div>
    </div>

    <script src="js/sidebars.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>