<?php
// Estas instrucciones cierran la sesión.
session_start();
session_unset($_SESSION['username']);
session_destroy();

header('Location: ../index.php');

?>