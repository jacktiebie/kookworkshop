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
include 'database.php';
?>
<!-- Inputfields voor de registratie pagina -->
<div class="container">
    <div class="mainpage3">
    <h1 class="titel">Registreren</h1>
    <form class="contactform" action="includes/signup.inc.php" method="post">
        <h3>Zet je naam hier.</h3>
        <input type="text" name="usersName" placeholder="Naam..."><br> 
        <h3>Zet je email hier.</h3>
        <input type="text" name="usersEmail" placeholder="Email..."><br>
        <h3>Zet je gebruikersnaam hier.</h3>
        <input type="text" name="usersUid" placeholder="Gebruikersnaam..."><br>
        <h3>Zet je wachtwoord hier.</h3>
        <input type="password" name="usersPwd" placeholder="Wachtwoord..."><br>
        <h3>Herhaal je wachtwoord.</h3>
        <input type="password" name="pwdrepeat" placeholder="Herhaal wachtwoord..."><br><br>
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
<footer>

</footer>
</body>
</html>