<!DOCTYPE html>
<html lang="nl">
<Head>
  <meta charset="utf-8">
  <title>contactpagina</title>
  <link rel=stylesheet href="css/custom.css">
</Head>
<body>
<!-- Navigatiebalk en databaseconnectie -->
<?php 
include '../includes/db.inc.php';
include 'navbar.php'; 
?>

<div class="container">
<!-- Sidebar navigatie -->
<div>
</div>
<!-- Inputfields voor de contactpagina -->
<div class="mainpage5">
  <h1>Contacten pagina</h1>
  <form class="contactform" action="contactpagina.php" method="POST"><br>
    <label for="naam"><h3>Naam:</h3></label><br><input type="text" name="naam" placeholder="Uw naam!" required><br>
    <label for="email"><h3>Email:</h3></label><br><input type="text" name="email" placeholder="Uw E-mail!" required><br>
    <label for="titel"><h3>Titel:</h3></label><br><input type="text" name="titel" placeholder="Uw titel!" required><br>
    <label for="bericht"><h3>Bericht:</h3></label><br><textarea name="bericht" placeholder="Zet hier uw bericht neer!" required></textarea><br>
    <button type="submit" name="submit" >Verzenden</button>
<!-- Code om de data naar de database te versturen -->
  <?php
    $stmt = $conn->prepare("INSERT INTO contact (ID, naam, email, titel, bericht) VALUES (null, ?, ?, ?, ?)");
    if (isset($_POST["naam"])) {
      $naam = $_POST["naam"];
      $email = $_POST['email'];
      $titel = $_POST["titel"];
      $bericht = $_POST["bericht"];
      $stmt->bind_param("ssss", $naam, $email, $titel, $bericht);
      $stmt->execute();
      header("Location: contactpagina.php");
    }
  ?>
  </form>
</div>
</div>
<!-- Footer van de pagina met contactgegevens -->
<?php
include 'footer.php'; 
?>
</body>
</html>