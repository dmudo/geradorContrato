<?php
session_start();
include('protect.php');
include_once('bd/conexao.php');
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
        <!--<img src="img/pessoa.png" alt="" width="42" height="42" class="rounded-circle me-2">-->
        <strong>Administrador</strong>
      </a>

      <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
        <li><a class="dropdown-item" href="perfil.php" target="_blank">Perfil</a></li>
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
                <i class="bi bi-people" style="font-size: 1.4rem; color: #6495ED;"></i> Colaborador
              </a>
            </li>
            <!--
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="bi bi-database" style="font-size: 1.4rem; color: #6495ED;"></i> Equipamentos
              </a>
            </li>
            -->
            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalcadcolaborador">
                <i class="bi bi-person-fill-add" style="font-size: 1.4rem; color: #6495ED;"></i> Add Colaborador
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalcadequipamento">
                <i class="bi bi-filetype-pdf" style="font-size: 1.4rem; color: #6495ED;"></i> Add Documentos
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalcadimagens">
                <i class="bi bi-filetype-jpg" style="font-size: 1.4rem; color: #6495ED;"></i> Add Imagens
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalcadvideos">
                <i class="bi bi-filetype-mp4" style="font-size: 1.4rem; color: #6495ED;"></i> Add Videos
              </a>
            </li>
      </nav>

      <!--Modal cadastro cliente. -->
      <div class="modal fade" id="modalcadcolaborador" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Adicionar Colaborador</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Formulario cadastro-->
              <form class="needs-validation" id="cadcolab" method="POST" action="processaModalCadcolaborador.php" target="iframe">
                <div class="row g-3">
                  <div class="col-sm-12">
                    <label for="firstName" class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control" id="firstName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Obrigatório colocar um nome válido.
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="senha" class="form-label">Senha</label>
                    <div class="input-group has-validation">
                      <input type="password" name="senha" class="form-control" id="senha" placeholder="" required>
                      <div class="invalid-feedback">
                        Seu nome de usuário é obrigatório.
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="">
                    <div class="invalid-feedback">
                      Insira um endereço de e-mail válido para o cadastro.
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="address2" class="form-label">Cargo</label>
                    <input type="text" name="cargo" class="form-control" id="address2" placeholder="">
                  </div>

                  <div class="col-12">
                    <label for="address3" class="form-label">Estabelecimento</label>
                    <select class="form-select" name="estabelecimento" id="country0" required>
                      <option style="display:none"></option>
                      <option value="INDEPENDÊNCIA">INDEPENDÊNCIA</option>
                      <option value="PERIMETRAL NORTE">PERIMETRAL NORTE</option>
                      <option value="ACREUNA">ACREUNA</option>
                      <option value="PRACA DA BIBLIA">PRACA DA BIBLIA</option>
                      <option value="URUACU">URUACU</option>
                      <option value="T63">T63</option>
                      <option value="PARQUE">PARQUE</option>
                      <option value="ANAPOLIS">ANAPOLIS</option>
                      <option value="PRIMAVERA">PRIMAVERA</option>
                      <option value="SAPEZAL">SAPEZAL</option>
                      <option value="TAMANDARE">TAMANDARE</option>
                      <option value="SORRISO">SORRISO</option>
                      <option value="QUERÊNCIA">QUERÊNCIA</option>
                      <option value="TANGARA">TANGARA</option>
                      <option value="CAMPO VERDE">CAMPO VERDE</option>
                      <option value="CAMPO NOVO">CAMPO NOVO</option>
                      <option value="RIALMA">RIALMA</option>
                      <option value="RVIND">RVIND</option>
                      <option value="ALTA FLORESTA">ALTA FLORESTA</option>
                      <option value="JUARA">JUARA</option>
                      <option value="JUINA">JUINA</option>
                      <option value="FEB">FEB</option>
                      <option value="CONFRESA">CONFRESA</option>
                      <option value="GARAVELO">GARAVELO</option>
                      <option value="BOTAFOGO">BOTAFOGO</option>
                      <option value="RONDOCAR">RONDOCAR</option>
                      <option value="LUCAS">LUCAS</option>
                      <option value="FCORREA">FCORREA</option>
                      <option value="RONDOTRUCK">RONDOTRUCK</option>
                      <option value="ISAAC">ISAAC</option>
                      <option value="PRAINHA">PRAINHA</option>
                      <option value="BARRA">BARRA</option>
                      <option value="SINOP">SINOP</option>
                      <option value="COLIDER">COLIDER</option>
                      <option value="ITUMBIARA">ITUMBIARA</option>
                      <option value="FORMOSA">FORMOSA</option>
                      <option value="PRIMAVERA">PRIMAVERA</option>
                      <option value="BURITI">BURITI</option>
                      <option value="PORANGATU">PORANGATU</option>
                      <option value="TRINDADE">TRINDADE</option>
                      <option value="AGUA BOA">AGUA BOA</option>
                      <option value="SRKSINOP">SRKSINOP</option>

                    </select>
                    <div class="invalid-feedback">
                      Selecione uma Estabelecimento válida.
                    </div>
                  </div>

                  <div class="col-md-5">
                    <label class="form-label" for="phone">Telefone</label>
                    <input type="text" name="telefone" id="phone" class="form-control" placeholder="" maxlength="33" />
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button class="btn btn-primary" type="submit" name="cadcolab">Cadastrar</button>

                  </div>
                </div>
                <!-- Modal confirmaçao de cadastro-->
                <div id="success" class="modal fade bd-example-modal-sm" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <span>
                        <h3>
                          <p style='color: green;'>Cadastro realizado com sucesso!</p>
                        </h3>
                      </span>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>

              </form>
              <iframe src="about:blank" style="display:none" id="iframe" name="iframe"></iframe>

            </div>
          </div>
        </div>
      </div>

      <!--Scrip para chamada via Iframe no Moldal Colaborador-->
      <script>
        var iframe = document.getElementById("iframe");
        iframe.onload = function() {
          formSubmitResponse(iframe);
        };

        function formSubmitResponse(iframe) {
          var idocument = (iframe.contentDocument || iframe.contentWindow.document);
          if (idocument) {
            var responseFromBackend = idocument.getElementsByTagName("body")[0].innerHTML;
          }
        }
      </script>
      <!--Limpa o campos do modal ao fechar-->
      <script>
        $('#modalcadcolaborador').on('hidden.bs.modal', function() {
          $(this).find('#cadcolab').trigger('reset');
        })
      </script>
      <!-- Colocar parenteses no DD e formatar o numero conforme usuario digita -->
      <script>
        const isNumericInput = (event) => {
          const key = event.keyCode;
          return ((key >= 48 && key <= 57) || //Permitir linha numérica
            (key >= 96 && key <= 105) // Permitir Teclado Numerico
          );
        };

        const isModifierKey = (event) => {
          const key = event.keyCode;
          return (event.shiftKey === true || key === 35 || key === 36) || // Permitir Shift, Home, End
            (key === 8 || key === 9 || key === 13 || key === 46) || // Permitir Backspace, Tab, Enter, Excluir
            (key > 36 && key < 41) || // Permitir esquerda, cima, direita, baixo
            (
              // Permitir Ctrl/Comando + A,C,V,X,Z
              (event.ctrlKey === true || event.metaKey === true) &&
              (key === 65 || key === 67 || key === 86 || key === 88 || key === 90)
            )
        };

        const enforceFormat = (event) => {
          // A entrada deve ter um formato de número válido ou uma tecla modificadora e não ter mais de dez dígitos
          if (!isNumericInput(event) && !isModifierKey(event)) {
            event.preventDefault();
          }
        };

        const formatToPhone = (event) => {
          if (isModifierKey(event)) {
            return;
          }

          const target = event.target;
          const input = event.target.value.replace(/\D/g, '').substring(0, 11); //Apenas os primeiros 11 dígitos da entrada (62)98415-3899
          const zip = input.substring(0, 2);
          const middle = input.substring(2, 7);
          const last = input.substring(7, 11);

          if (input.length > 7) {
            target.value = `(${zip}) ${middle}-${last}`;
          } else if (input.length > 2) {
            target.value = `(${zip}) ${middle}`;
          } else if (input.length > 0) {
            target.value = `(${zip}`;
          }
        };

        const inputElement = document.getElementById('phone');
        inputElement.addEventListener('keydown', enforceFormat);
        inputElement.addEventListener('keyup', formatToPhone);
      </script>
      <!-- Fim do modal cadastro cliente -->

      <!--Incio Modal cadastro Documentos. -->
      <div class="modal fade" id="modalcadequipamento" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Adicionar documentos</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!--Inicio do formulario de cadastro de Equipamentos -->

              <form id="cad-upload-arquivos" onsubmit="enviar.disabled = false; return false;" method="POST" action="cadastrararquivos.php" enctype="multipart/form-data">
                <div class="row g-3">

                  <div class="col-10">
                    <label for="address3" class="form-label">Selecione colaborador</label>
                    <select class="form-select" name="idcolab" id="idcolab" required>
                      <option style="display:none"></option>
                      <?php
                      $result_col = "SELECT * FROM cadastro ORDER BY nome";
                      $resultado_Col = mysqli_query($conn, $result_col);
                      while ($row_col = mysqli_fetch_assoc($resultado_Col)) {
                        echo '<option value="' . $row_col['id'] . '">' . $row_col['nome'] . '</option>';
                      }
                      ?>
                    </select>
                    <div class="invalid-feedback">
                      Por favor selecione um colaborador.
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="formFile" class="form-label">Documentos em PDF</label>
                    <i class="bi bi-filetype-pdf" style="font-size: 1.5rem; color: cornflowerblue;"></i>
                    <input class="form-control" type="file" name="arquivos_pdf" id="arquivos_pdf" multiple>
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Descrição do Documento</label>
                    <textarea class="form-control" type="text" name="descpdf" id="descpdf" rows="3"></textarea>
                  </div>

                  <span id="msgPDF"></span><!--Receber MSG de sucerro ou erro-->

                </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              <button class="btn btn-primary" type="submit" value="enviar" name="enviar">Cadastrar</button>
            </div>

            </form>
            <!-- Final do formulario dos dados de equipamentos -->

          </div>
        </div>
      </div>
      <!-- Limpa o campos do modal ao fechar-->
      <script>
        $('#modalcadequipamento').on('hidden.bs.modal', function() {
          $(this).find('#cad-upload-arquivos').trigger('reset');
        })
      </script>
      <!---Abre modal apenas ao clicar-->
      <script>
        $(document).ready(function() {
          $('#modalcadequipamento').trigger('click');
        });
      </script>
      <!--Fim do Modal Cadastro Documentos -->

      <!--Inicio Modal Cadastro Imagens -->
      <div class="modal fade" id="modalcadimagens" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Adicionar arquivos de imagens</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!--Inicio do formulario de cadastro de Equipamentos -->

              <form id="cad-upload-arquivos2" onsubmit="enviar.disabled = false; return false;" method="POST" action="cadastroimagens.php" enctype="multipart/form-data">
                <div class="row g-3">

                  <div class="col-10">
                    <label for="address3" class="form-label">Selecione colaborador</label>
                    <select class="form-select" name="idcolab2" id="idcolab2" required>
                      <option style="display:none"></option>
                      <?php
                      $result_col = "SELECT * FROM cadastro ORDER BY nome";
                      $resultado_Col = mysqli_query($conn, $result_col);
                      while ($row_col = mysqli_fetch_assoc($resultado_Col)) {
                        echo '<option value="' . $row_col['id'] . '">' . $row_col['nome'] . '</option>';
                      } ?>
                    </select>
                    <div class="invalid-feedback">
                      Por favor selecione um colaborador.
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="formFile" class="form-label">Arquivos de imagens</label>
                    <i class="bi bi-filetype-jpg" style="font-size: 1.5rem; color: cornflowerblue;"></i>
                    <input class="form-control" type="file" name="arquivos_imagens" id="arquivos_imagens" multiple>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descrição do Documento</label>
                    <textarea class="form-control"  name="descimagens" id="descimagens" rows="3"></textarea>
                  </div>

                  <span id="msgimg"></span><!--Receber MSG de sucerro ou erro-->
                </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              <button class="btn btn-primary" type="submit" value="Enviar" name="enviar">Cadastrar</button>
            </div>

            </form>
            <!-- Final do formulario dos dados de equipamentos -->

          </div>
        </div>
      </div>
      <!-- Limpa o campos do modal ao fechar-->
      <script>
        $('#MyModal').on('hidden.bs.modal', function() {
          $(this).find('cad-upload-arquivos2').trigger('reset');
        })
      </script>
      <!---Abre modal apenas ao clicar-->
      <script>
        $(document).ready(function() {
          $('#modalcadimagens').trigger('click');
        });
      </script>
      <!--Fim Modal cadastro Imagens-->

      <!--Inicio Modal cadastro Videos-->
      <div class="modal fade" id="modalcadvideos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Adicionar arquivos de videos</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!--Inicio do formulario de cadastro de Equipamentos -->

              <form id="cad-upload-arquivos3" onsubmit="enviar.disabled = false; return false;" method="POST" action="cadastrarvideo.php" enctype="multipart/form-data">
                <div class="row g-3">

                  <div class="col-10">
                    <label for="address3" class="form-label">Selecione colaborador</label>
                    <select class="form-select" name="idcolab3" id="idcolab3" required>
                      <option style="display:none"></option>
                      <?php
                      $result_col = "SELECT * FROM cadastro ORDER BY nome";
                      $resultado_Col = mysqli_query($conn, $result_col);
                      while ($row_col = mysqli_fetch_assoc($resultado_Col)) {
                        echo '<option value="' . $row_col['id'] . '">' . $row_col['nome'] . '</option>';
                      } ?>
                    </select>
                    <div class="invalid-feedback">
                      Por favor selecione um colaborador.
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="formFile" class="form-label">Arquivos de video</label>
                    <i class="bi bi-filetype-mp4" style="font-size: 1.5rem; color: cornflowerblue;"></i>
                    <input class="form-control" type="file" name="arquivos_video" id="arquivos_video" multiple>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descrição do Documento</label>
                    <textarea class="form-control" name="descvideo" id="descvideo" rows="3"></textarea>
                  </div>

                  <span id="msgvideo"></span><!--Receber MSG de sucerro ou erro-->
                </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              <button class="btn btn-primary" type="submit" value="Enviar" name="enviar">Cadastrar</button>
            </div>

            </form>
            <!-- Final do formulario dos dados de equipamentos -->

          </div>
        </div>
      </div>
      <!-- Limpa o campos do modal ao fechar-->
      <script>
        $('#modalcadvideos').on('hidden.bs.modal', function(e) {
          $(this)
            .find("input,textarea,select")
            .val('')
            .end()
            .find("input[type=checkbox], input[type=radio]")
            .prop("checked", "")
            .end();
        })
      </script>
      <!---Abre modal apenas ao clicar-->
      <script>
        $(document).ready(function() {
          $('#modalcadvideos').trigger('click');
        });
      </script>
      <!-- Fim modal cadastro Videos-->

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <h1><i class="bi bi-people" style="font-size: 3.0rem; color: #6495ED;"></i> Colaborador</h1>
        <!--Classe que chama o colaborador.js-->
        <span class="listar-usuarios"></span>
      </main>

      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/colaborador.js"></script>
      <script src="js/cadastroArquivos.js"></script>
      <script src="js/cadastrovideos.js"></script>
      <script src="js/cadastroimagens.js"></script>
      <script src="js/cadastro.js"></script>

</body>

</html>