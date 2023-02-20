<!DOCTYPE html>
<html lang="nl">
<Head>
    <meta charset="utf-8">
    <link rel=stylesheet href="../css/custom.css">
</Head>
<body>
<?php
  include '../includes/db.inc.php';
  session_start();
  $uid = $_SESSION['userid'];
?>
<!-- Navigatiebalk -->
<div class="navbar">
<div class="logo">
  <a href="index.php"><img src="../foto/image-removebg-preview.png"></a>
</div>
<div class="nav">
  <?php
    if (isset($_SESSION["useruid"])) {
  ?>
  <a href="index.php">Home</a>
    <a href="reserveringen.php">Reserveren</a>
    <a href="workshop.php">Workshop</a>
    <a href="contact.php">Contact</a>
    <a href="../includes/logout.inc.php">Uitloggen</a>
  <?php
  } else {
  ?>
    <a href="index.php">Home</a>
    <a href="contact.php">Contact</a>
    <a href="registreren.php">Registreren</a>
    <a href="inloggen.php">Inloggen</a>
  <?php
  }
  ?>
</div>
</div>
</body>
</html>