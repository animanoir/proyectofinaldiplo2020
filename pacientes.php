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
        <span class="titulo"><img style="margin-right: 1rem;" class="img-notificacion" src="assets/heart.svg">
          <h5>Pacientes de <?php echo $_SESSION['username'] ?></h5>
        </span>
        <div class="pacientes-wrapper">
          <?php
                $id_actual = $_SESSION['id'];
                $pacientes = mysqli_query($db_link, " SELECT * FROM pacientes WHERE id_doctor = '$id_actual' ");

                foreach($pacientes as $paciente){
                $id_paciente = $paciente['id'];
                echo '
                <div class="pacientes">
                  <div class="paciente">
                    <img class="img-paciente" src="./generic-avatar.jpg" alt="" srcset="">
                    <p>' .$paciente['nombre']. '| id: '. $id_paciente .'</p>
                    <p class="diagnostico">Diagnóstico: hepatitis</p>
                    <p>Habitación: ' .$paciente['habitacion']. '</p>
                    <a href="./historial.php"><button class="paciente-ver">VER HISTORIAL</button></a>
                  </div>
                </div>
                ';
                }
              ?>
        </div>
      </div>

    </div>
  </div>



  <script src="idoctor.js"></script>
</body>

</html>