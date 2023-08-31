<?php
include_once("bd/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!--Deixar apagina responsiva -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<body>
  <div class="container theme-showcase" role="main">

    <?php

    $nome = $_POST['nome'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $cargo = $_POST['cargo'];
    $estabelecimento = $_POST['estabelecimento'];
    $telefone = $_POST['telefone'];

    $result_usuarios = mysqli_query($conn, "INSERT INTO cadastro (nome, senha, email, cargo, estabelecimento, telefone, created, modified, adm) VALUES ('$nome', '$senha', '$email', '$cargo', '$estabelecimento', '$telefone', NOW(), NOW(), 0)");

    if (mysqli_insert_id($conn) > 0) { ?>
      
      <!-- Modal confirmar Cadastro-->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Cadastro realizado com Sucesso!</h5>
            </div>
            <div class="modal-body">
              Seja bem vindo! <?php echo $nome ?>
            </div>
            <div class="modal-footer">
              <a href="index.php"><button type="button" class="btn btn-primary">Entrar</button> </a>
            </div>
          </div>
        </div>
      </div>
      <script>
        $(document).ready(function() {
          $('#myModal').modal('show');
        });
      </script>

    <?php } else { ?>

      <!-- Modal Erro Cadastro-->
      <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Erro no cadastro!</h5>
            </div>

          </div>
        </div>
      </div>
      <script>
        $(document).ready(function() {
          $('#myModal2').modal('show');          
        });
      </script>

    <?php } ?>

    <script src="js/bootstrap.bundle.min.js"></script>

  </div>
</body>

</html>