<?php
session_start();

// Destruye todas las sesiones
session_destroy();

// Redirige a la página de login
header("Location: login.html"); 
exit;
?>