<?php
session_start();

// Controleren of de gebruiker is ingelogd
if (!isset($_SESSION['username'])) {
    // Gebruiker is niet ingelogd, doorsturen naar het inlogscherm
    header("Location: index.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>