<?php
session_start();
require_once './config.php';

// Registrar usuario. Checa si el login está isseteado.
if (isset($_POST['login'])) {
        // Toma los datos del formulario
        $username = htmlentities(mysqli_real_escape_string($db_link, ($_POST['username'])));
        $password = htmlentities(mysqli_real_escape_string($db_link, ($_POST['password'])));

        // Busca este usuario en la bd.
        $query_usuario = mysqli_query($db_link, "SELECT id, username, password, tipo FROM usuarios WHERE username = '$username'");
        // Guarda dentro de una variable la fila del usuario.
        $row = mysqli_fetch_array($query_usuario, MYSQLI_ASSOC);
        $row_password = $row['password'];

        if($row_password == $password){
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['tipo'] = $row['tipo'];
            header("Location: ../menu.php");
            exit();
        }else{
            $_SESSION['login_fail'] =
            '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Las credenciales de acceso son erróneas.
            </div>';
            header("Location: index.php");
            exit();
        }
    }
?>