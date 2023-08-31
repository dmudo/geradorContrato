<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Cadastro Colaborador</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--Deixar apagina responsiva -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Link Framework Bootstrap-->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">-->
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

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .container {
            max-width: 760px;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container">
        <main>
            <div class="py-5 text-center">
                <h2>Criar sua conta de colaborador</h2>
                <p class="lead">Ao se cadastrar, você concorda com nossos Termos, Política de Privacidade.</p>
            </div>

            <div class="row">

                <form class="needs-validation" method="POST" action="processa.php">
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
                            <select class="form-select" name="estabelecimento" id="country" required>
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
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit">Finalizar cadastro</button>
                </form>

            </div>
        </main>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2022 Tropical Pneus</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacidade</a></li>
                <li class="list-inline-item"><a href="#">Termos</a></li>
                <li class="list-inline-item"><a href="#">Suporte</a></li>
            </ul>
        </footer>
    </div>

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

    <script src="js/cadastro.js"></script>

</body>

</html>