<!DOCTYPE html>
<html lang="nl">
<Head>
    <meta charset="utf-8">
    <title>Registratiepagina</title>
    <link rel=stylesheet href="css/custom.css">
</Head>
<body>
<!-- Navigatiebalk en databaseconnectie -->
<?php 
include '../includes/db.inc.php';
include 'navbar.php'; 
?>
<!-- Inputfields voor de registratie pagina -->
<div class="col1">
    <div class="inloggen">
    <h1 class="titel">Registreren</h1>
    <form action="../includes/signup.inc.php" method="post">
        <input type="text" name="usersName" placeholder="Naam..."><br> 
        <input type="text" name="usersEmail" placeholder="Email..."><br>
        <input type="text" name="usersUid" placeholder="Gebruikersnaam..."><br>
        <input type="password" name="usersPwd" placeholder="Wachtwoord..."><br>
        <input type="password" name="pwdrepeat" placeholder="Herhaal wachtwoord..."><br>
        <button type="submit" name="submit">Registreren</button>
</form>
<!-- Code voor de erorr massages voor de registratie pagina -->
<?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
          echo "<p class='Fout'>Vul al de velden in!</p>";    
      }
      else if ($_GET["error"] == "invaliduid") {
          echo "<p class='Fout'>Gebruik een goede naam!</p>";
      }
      else if ($_GET["error"] == "invalidemail") {
          echo "<p class='Fout'>Gebruiken een goede E-mail!</p>";
      }
      else if ($_GET["error"] == "nomatchfound") {
          echo "<p class='Fout'>Wachtwoorden zijn niet gelijk!</p>";
      }
      else if ($_GET["error"] == "usernametaken") {
          echo "<p class='Fout'>Gebruikersnaam is al in beslag!</p>";
      }
      else if ($_GET["error"] == "stmtfailed") {
          echo "<p class='Fout'>Er ging iets verkeerd, probeer opnieuw!</p>";
      }
      else if ($_GET["error"] == "none") {
          echo "<p class='Fout'>Je bent geregistreerd!</p>";
      }
    }
?>
</div>
</div>
<!-- Footer van de pagina met contactgegevens -->
<?php 
include 'footer.php'; 
?>
</body>
</html>