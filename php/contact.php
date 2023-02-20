<!DOCTYPE html>
<html lang="nl">
<Head>
  <meta charset="utf-8">
  <title>contactpagina</title>
</Head>
<body>
<!-- Navigatiebalk en databaseconnectie -->
<?php 
include '../includes/db.inc.php';
include '../includes/functions.inc.php';
include 'navbar.php'; 
?>
<!-- Inputfields voor de contact pagina -->
<div class="container">
<div class="contact">
<div class="col1">
  <h1>Stel vragen...</h1>
  <p>Stuur ons een berichtje met het contact formulier of geef ons een belletje.</p><br>
<p></p>
  <a href="tel:+7094137055">Tel: 7094137055</a>
</div>
<div class="col2">
  <h1>Contact formulier</h1>
<form  action="contact.php" method="POST"><br>
    <input type="text" name="naam" placeholder="Uw naam!" required><br>
    <input type="text" name="email" placeholder="Uw E-mail!" required><br>
    <input type="text" name="titel" placeholder="Uw titel!" required><br>
    <textarea name="bericht" placeholder="Zet hier uw bericht neer!" required></textarea><br>
  <button type="submit" name="submit" >Verzenden</button>
  <?php
    $stmt = $conn->prepare("INSERT INTO contact (ID, naam, email, titel, bericht) VALUES (null, ?, ?, ?, ?)");
  
    if (isset($_POST["naam"])) {
        $naam = $_POST["naam"];
        $email = $_POST['email'];
        $titel = $_POST["titel"];
        $bericht = $_POST["bericht"];
  
        $stmt->bind_param("ssss", $naam, $email, $titel, $bericht);

        if (emptyInputContact($naam, $email, $titel, $bericht) !== false) {
          header("location: contact.php?error=emptyinput");
          exit();
        }
  
        $stmt->execute();
        header("Location: contact.php");
    }
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
          echo "<p class='Fout'>Vul al de velden in!</p>";    
      }
      else if ($_GET["error"] == "stmtfailed") {
          echo "<p class='Fout'>Er ging iets verkeerd, probeer opnieuw!</p>";
      }
      else if ($_GET["error"] == "none") {
          echo "<p class='Fout'>Uw bericht is verzonden!</p>";
      }
    }
  ?>
</form>
</div>
</div>
</div>
<!-- Footer van de pagina met contactgegevens -->
<div class="bruhfooter">
<?php
include 'footer.php'; 
?>
</div>
</body>
</html>