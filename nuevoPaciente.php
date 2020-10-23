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
          <div>
            <h4>Añade un nuevo paciente a la base de datos<h4>
                <form action="funciones/anadir.php" method="POST">
                  <label for="nombre">Nombre</label>
                  <input type="text" id="nombre" name="nombre">
                  <label for="edad">Edad</label>
                  <input type="text" id="edad" name="edad">
                  <label for="tel">Teléfono</label>
                  <input type="text" id="tel" name="tel">
                  <label for="domicilio">Domicilio</label>
                  <input type="text" id="domicilio" name="domicilio">
                  <label for="sangre">Sangre</label>
                  <input type="text" id="sangre" name="sangre">
                  <label for="alergias">Alergias</label>
                  <input type="text" id="alergias" name="alergias">
                  <label for="habitacion">Habitación</label>
                  <input type="text" id="habitacion" name="habitacion">
                  <label for="id_doctor">id Doctor</label>
                  <input type="text" id="id_doctor" name="id_doctor">
                  <input type="submit">
                </form>
          </div>
        </h2>
      </div>
    </div>
  </div>
  <script src="idoctor.js"></script>
</body>

</html>