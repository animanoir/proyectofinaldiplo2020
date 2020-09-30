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
        </div>
      </div>
    </div>
  </div>
  <script src="idoctor.js"></script>
</body>

</html>