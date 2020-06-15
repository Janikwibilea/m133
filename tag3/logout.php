<?php 

session_start();
session_destroy();
echo 'Logout erfolgreich <br>';
echo '<a href="session.html">Zurück zum Login</a> <br>';


?>