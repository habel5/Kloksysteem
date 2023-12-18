<?php
session_start();

// Sessie verwijderen en uitloggen
session_unset();
session_destroy();

// Doorsturen naar het inlogscherm na uitloggen
header("Location: index.php");
exit();
?>