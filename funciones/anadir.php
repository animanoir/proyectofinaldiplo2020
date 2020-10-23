<?php
session_start();
require_once './config.php';


$nombre= mysqli_real_escape_string($db_link, $_REQUEST['nombre']);
$edad= mysqli_real_escape_string($db_link, $_REQUEST['edad']);
$tel= mysqli_real_escape_string($db_link, $_REQUEST['tel']);
$domicilio= mysqli_real_escape_string($db_link, $_REQUEST['domicilio']);
$sangre= mysqli_real_escape_string($db_link, $_REQUEST['sangre']);
$alergias= mysqli_real_escape_string($db_link, $_REQUEST['alergias']);
$habitacion= mysqli_real_escape_string($db_link, $_REQUEST['habitacion']);
$doctor= mysqli_real_escape_string($db_link, $_REQUEST['id_doctor']);

$sql = "INSERT INTO pacientes (nombre, id_doctor, edad, telefono, domicilio, sangre, alergias, habitacion) VALUES ('$nombre', '$doctor', '$edad', '$tel', '$domicilio', '$sangre', '$alergias', '$habitacion')";
if(mysqli_query($db_link, $sql)){
    echo "Se añadió con éxito el paciente.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db_link);
}

// Close connection
mysqli_close($db_link);
?>