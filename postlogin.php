<?php

if (isset($_POST['email']) || isset($_POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu email";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha a senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        //$sql_code = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
        $sql_code = "SELECT * FROM cadastro WHERE email = '$email' LIMIT 1";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do codigo sql" . $mysqli->error);

        $resultado_usuario = mysqli_query($conn, $sql_code);

        if ($resultado_usuario) {
            $row_usuario = mysqli_fetch_assoc($resultado_usuario);

            if (password_verify($senha, $row_usuario['senha'])) {

                $adm = $row_usuario['adm'];
                $nome = $row_usuario['nome'];

                if ($adm == 1) {

                    header("Location: dashboard.php");

                    $_SESSION['email'] =  $row_usuario['email'];
                    $_SESSION['nome'] = $row_usuario['nome'];
                    $_SESSION['id'] = $row_usuario['id'];
                } else {

                    header("Location: dashboard_normal.php");

                    $_SESSION['email'] =  $row_usuario['email'];
                    $_SESSION['nome'] = $row_usuario['nome'];
                    $_SESSION['id'] = $row_usuario['id'];
                    $_SESSION['adm'] = $row_usuario['adm'];
                }
            }
        }
    }
}
