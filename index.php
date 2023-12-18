<!DOCTYPE html>
<html>
<head>
    <title>ICT Kloksysteem</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="vistaicon.png">
</head>
<body>
  <div class="login_container">
    <div class="login_title">
      <h2>ICT Kloksysteem</h2>
    </div>
    <div class="login_descriptie">
      <h3>Inloggen dashboard ICT Kloksysteem</h3>
    </div>
    <div class="login_form">
      <form method="post" action="login.php" >
          <label for="username" class="login_form_title">Gebruikersnaam:</label><br>
          <input type="text" id="username" name="username" class="login_tekstveld" autocomplete="off"><br>
          <label for="password" class="login_form_title">Wachtwoord:</label><br>
          <input type="password" id="password" name="password" class="login_tekstveld" autocomplete="off"><br><br>
          <input type="submit" value="Login" class="login_button">
      </form>
    </div>
  </div>
</body>
</html>