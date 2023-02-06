<!DOCTYPE html>
<html lang="nl">
<Head>
    <meta charset="utf-8">
    <title>Inlogpagina</title>
    <link rel=stylesheet href="css/custom.css">
</Head>
<body>
<!-- Navigatiebalk en databaseconnectie -->
<?php 
include 'database.php';
?>
<!-- Inputfields voor het inloggen -->
<div class="container">
    <div class="mainpage4">
    <h1 class="titel">Inloggen</h1>
    <form class="contactform" action="includes/login.inc.php" method="post">
        <h3>Zet je gebruikersnaam of email hier.</h3> 
        <input type="text" name="uid" placeholder="Gebruikersnaam/Email..."><br> 
        <h3>Zet je wachtwoord hier.</h3>
        <input type="password" name="pwd" placeholder="Wachtwoord..."><br>
        <button type="submit" name="submit">Inloggen</button>
    </form>  
<!-- Code voor de erorr massages -->
    <?php
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyinput") {
              echo "<p class='Fout'>Vul al de velden in!</p>";    
          }
          else if ($_GET["error"] == "wronglogin") {
              echo "<p class='Fout'>Verkeerde gebruikersnaam/wachtwoord!</p>";
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