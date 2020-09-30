<?php

// Activa el outputbuffer
ob_start();
// Pone la zona horario por default
date_default_timezone_set('America/Mexico_City');

// Datos de accesso a la base de datos
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'idoctor');

$db_link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($db_link === false){
    die("ERROR: No se pudo conectar " . mysqli_connect_error());
}

// Nombre del sitio
define('NOMBRESITIO', 'iDoctor');
?>