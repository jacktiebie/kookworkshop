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
include '../includes/db.inc.php';
include 'navbar.php'; 
?>
<!-- Inputfields voor het inloggen -->
<div class="container">
  <div class="col1">
    <div class="inloggen">
    <h1 class="titel">Inloggen</h1>
    <form action="../includes/login.inc.php" method="post">
        <input type="text" name="usersUid" placeholder="Gebruikersnaam/Email..."><br> 
        <input type="password" name="usersPwd" placeholder="Wachtwoord..."><br>
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
</div>
<!-- Footer van de pagina met contactgegevens -->
<?php
include 'footer.php'; 
?>
</body>
</html>