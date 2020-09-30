<?php
  require_once 'funciones/config.php';
  require_once 'funciones/functions.php';
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php echo NOMBRESITIO ?> - Iniciar sesión
  </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="wrapper">
    <form method="POST" action="funciones/login.php" class="login-form">
      <div class="text-center">
        <h1>iDOCTOR</h1>
        <p> Para utilizar el sistema utiliza tus datos de usuario para iniciar sesión. Si tienes problemas conctacta a
          Soporte.</p>
          <?php
        if(isset($_SESSION['login_fail'])){
            echo $_SESSION['login_fail'];
            unset( $_SESSION['login_fail']);
        }
        ?>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp"
          placeholder="Usuario">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>
      <center>
        <button type="submit" class="btn btn-dark px-5" name="login">Ingresar</button>
      </center>
      <center>
        <sub>Óscar A. Montiel | Diplomado Desarrollo Web 2020</sub>
      </center>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
  <script src="idoctor.js"></script>
</body>

</html>