<?php
session_start();

// Vervang deze array door een database met gebruikersgegevens
$valid_credentials = [
    'Danny' => 'pw',
    // Voeg hier meer gebruikersnamen en wachtwoorden toe
];

// Controleren of de inloggegevens zijn ingediend via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Controleren of de gebruikersnaam bestaat en het wachtwoord overeenkomt
    if (isset($valid_credentials[$username]) && $valid_credentials[$username] === $password) {
        // Inloggen is geslaagd; sessievariabele instellen en doorsturen naar de beveiligde pagina
        $_SESSION['username'] = $username;
        header("Location: clocksystem/index.php");
        exit();
    } else {
        echo "Wrong username or password!";
    }
}
?>
