<?php
require_once 'funciones/config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'parciales/head.php'?>

<body>
    <?php include 'parciales/navbar.php'?>
    <div class="page">
    <?php include 'parciales/sidebar.php'?>
      <div class="dashboard">
        <div class="recuadro">
          <span class="datos-propiedad">DATOS GENERALES DEL PACIENTE</span>
          <div class="paciente-datos">
            <img class="paciente-avatar" src="./generic-avatar.jpg" alt="">
            <div class="paciente-datos-1">
              <span class="datos-propiedad">NOMBRE:</span>
              <p clasS="datos-valor">JUAN CARLOS</p>
              <span class="datos-propiedad">EDAD:</span>
              <p clasS="datos-valor">40 años</p>
            </div>
            <div class="paciente-datos-1">
              <span class="datos-propiedad">TELÉFONO:</span>
              <p clasS="datos-valor">442 478 1982</p>
              <span class="datos-propiedad">DOMICILIO:</span>
              <p clasS="datos-valor">Calle Narices #78</p>
            </div>
            <div class="paciente-datos-1">
              <span class="datos-propiedad ">TIPO DE SANGRE:</span>
              <p clasS="datos-valor">A+</p>
              <span class="datos-propiedad">ALERGIAS:</span>
              <p clasS="datos-valor">NINGUNA</p>
            </div>
          </div>
        </div>
        <div class="recuadro">
          <span class="datos-propiedad">HISTORIAL CLÍNICO</span>
          <div class="historia">
            <p>23/06/2019</p> <span class="separador">|</span>
            <p>Se hizo algo</p>
          </div>
          <div class="historia">
            <p>23/06/2019</p> <span class="separador">|</span>
            <p>Se hizo algo</p>
          </div>
          <div class="historia">
            <p>23/06/2019</p> <span class="separador">|</span>
            <p>Se hizo algo</p>
          </div>
          <div class="historia">
            <p>23/06/2019</p> <span class="separador">|</span>
            <p>Se hizo algo</p>
          </div>
        </div>
        <div class="recuadro">
          <span class="datos-propiedad">EXÁMENES MÉDICOS</span>
          <div class="historia">
            <p>23/06/2019</p>
            <span class="separador">|</span>
            <p>FOLIO: 78414</p>
            <span class="separador">|</span>
            <p>CIRUGÍA</p>
            <span class="separador">|</span>
            <p class="estatus-completado">COMPLETADO</p>
          </div>
          <div class="historia">
            <p>23/06/2019</p>
            <span class="separador">|</span>
            <p>FOLIO: 78414</p>
            <span class="separador">|</span>
            <p>CIRUGÍA</p>
            <span class="separador">|</span>
            <p class="estatus-pendiente">PENDIENTE</p>
          </div>
        </div>
<!--
        <div class="recuadro flex">
          <span class="datos-propiedad">EXÁMENES SOLICITADOS</span>
          <a class="solicitar-examen" href="./solicitar.html">SOLICITAR NUEVO EXAMEN</a>
          <div class="historia">
            <p>23/06/2019</p>
            <span class="separador">|</span>
            <p>FOLIO: 78414</p>
            <span class="separador">|</span>
            <p>CIRUGÍA</p>
            <span class="separador">|</span>
            <p class="estatus-pendiente">PENDIENTE</p>
          </div>
          <div class="historia">
            <p>23/06/2019</p>
            <span class="separador">|</span>
            <p>FOLIO: 78414</p>
            <span class="separador">|</span>
            <p>CIRUGÍA</p>
            <span class="separador">|</span>
            <p class="historia-nombre">LUPITA LUPITATOTA</p>
            <span class="separador">|</span>
            <p class="estatus-pendiente">PENDIENTE</p>
          </div>
        </div> -->
      </div>
    </div>
  </div>
  <script src="idoctor.js"></script>
</body>

</html>