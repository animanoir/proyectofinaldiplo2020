<?php
require_once 'funciones/config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'parciales/head.php'?>

<body>
  <div class="u-full-width ">
  <?php include 'parciales/navbar.php'?>
    <div class="page">
    <?php include 'parciales/sidebar.php'?>
      <div class="dashboard">
        <h2>Bienvenido,
          <?php
            echo $_SESSION['username'];
            switch($_SESSION['tipo']){
              case 1:
                echo '(doctor)';
              break;
              case 2:
                echo '(admin)';
              break;
              case 3:
                echo '(laboratorista)';
              break;
              default:
                echo ' | (nada)';
            }
          ?>
        </h2>
      </div>
    </div>
  </div>
  <script src="idoctor.js"></script>
</body>

</html>