<!DOCTYPE html>
<html lang="nl">
<Head>
    <meta charset="utf-8">
    <title>homepagina</title>
    <link rel=stylesheet href="css/custom.css">
</Head>
<body>
<!-- Navigatiebalk en databaseconnectie -->
<?php
  include '../includes/db.inc.php';
  include 'navbar.php';
  include '../includes/functions.inc.php';
?>

<!-- Content van de pagina -->
<div class="home">
  <div class="blok1">
    <div class="col">
      <h1>Kookworkshop.nl</h1>
      <p>Voor de best kookworkshop</p>
      <?php
        if (isset($_SESSION["useruid"])) {
        $useruid = $_SESSION["useruid"]; 
      ?>
        <h2>U bent ingeloged op onze website!</h2>
      <?php
      } else {
      ?>
        <h1></h1>
      <?php
      }
      ?>
    </div> 
  </div> 



<?php
$sql = "SELECT usersRoles FROM users WHERE usersUid= '$useruid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo $row['usersRoles'];

$klant = 'klant';
$barman = 'barman';
$gastheer = 'gastheer';
$admin = 'admin';

  if ($row['usersRoles'] == $klant) {
    echo '<div class="divider"></div> 
    <div class="blok2">
    <div class="col">
        <img src="../foto/1920x3000px.png">
        <p>Voor de best kookworkshop</p>
      </div> 
      <div class="col">
        <img src="../foto/5645.png">
        <p>Voor de best kookworkshop</p>
      </div> 
      <div class="col">
        <img src="../foto/1535336569362360x63336000px.png">
        <p>Voor de best kookworkshop</p>
      </div> 
    </div>';
  }
  else if ($row['usersRoles'] == $barman) {
    echo '<div class="divider"></div> 
    <div class="blok2">
    <div class="col">
        <img src="../foto/1920x3000px.png">
        <p>Voor de best kookworkshop</p>
      </div> 
      <div class="col">
        <img src="../foto/5645.png">
        <p>Voor de best kookworkshop</p>
      </div> 
      <div class="col">
        <img src="../foto/1535336569362360x63336000px.png">
        <p>Voor de best kookworkshop</p>
      </div> 
    </div>';
  }
  else if ($row['usersRoles'] == $gastheer) {
    echo '';
  }
  else if ($row['usersRoles'] == $admin) {
    echo '';
  }
  else {
      echo "failed";
  }    
?>



  <div class="divider"></div> 
  <div class="blok3">
  <div class="col">
  <img src='../foto/Basic-Cooking-Methods.jpg'>
    </div> 
    <div class="col">
      <h1>Kookworkshop.nl</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <br>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div> 
  </div> 
  <div class="divider"></div> 
  <div class="blok4">
    <div class="col">
      <h1>Kookworkshop.nl</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <br>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div class="col">
  <img src='../foto/Basic-Cooking-Methods.jpg'>
    </div> 
</div> 
</div> 
<!-- Footer van de pagina met contactgegevens -->

<?php 
include 'footer.php'; 
?>
</body>
</html>