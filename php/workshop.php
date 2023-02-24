<!DOCTYPE html>
<html lang="nl">
<Head>
  <meta charset="utf-8">
<<<<<<< Updated upstream
  <title>workshop</title>
</Head>
<body>
<!-- Navigatiebalk en databaseconnectie -->
<?php 
include '../includes/db.inc.php';
include 'navbar.php'; 
?>
<!-- Inputfields voor de contact pagina -->
<div class="container">
</div>
<!-- Footer van de pagina met contactgegevens -->
<div class="bruhfooter">
<?php
include 'footer.php'; 
?>
</div>
=======
  <title>workshops</title>
  <style>
  * {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #f0f0f0;
}

.header {
  padding: 30px;
  text-align: center;
  background: #f0f0f0;
}

.header h1 {
  font-size: 50px;
}

.leftcolumn {   
  float: left;
  width: 25%;
}

.rightcolumn {
  float: left;
  width: 75%;
  background-color: #f0f0f0;
  padding-left: 20px;
}

.fakeimg {
  background-color: #FFF;
  width: 100%;
  padding: 20px;
}

.card {
  background-color: #FFF;
  padding: 20px;
  margin-top: 20px;
}

.screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

</style>
</Head>
<body>
<?php include 'navbar.php'?>

<div class="header">
  <h1>6 Workshops</h1>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Kookworkshops</h2>
      <br>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <div class="fakeimg" style="height:1100px;"></div>

    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>workshop</h2>
      <div class="fakeimg" style="height:100px;"></div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <img src "../foto/rijstavel.png" height="100" width="100">
     </div>
    <div class="card">
    <h2>workshop</h2>
      <div class="fakeimg" style="height:100px;"></div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
    <h2>workshop</h2>
      <div class="fakeimg" style="height:100px;"></div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
    <h2>workshop</h2>
      <div class="fakeimg" style="height:100px;"></div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
    <h2>workshop</h2>
      <div class="fakeimg" style="height:100px;"></div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
    <h2>workshop</h2>
      <div class="fakeimg" style="height:100px;"></div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>

  </div>
  <?php include 'footer.php'?>
</div>


>>>>>>> Stashed changes
</body>
</html>