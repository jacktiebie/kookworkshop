<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/reservations.css">
    </head>

    <body>
        <?php include 'navbar.php'?>
        <div class="container">
            <div class="topdiv">
                <b><h1 class="white">Reserveren</h1></b>
            </div>


            <div class="middiv">
            <form method="post">
                <p>Datum: </p>
                <input type="date" name="date" placeholder="Datum afspraak"><br><br>
                <p>Voornaam: </p>
                <input type="text" name="firstName" placeholder="Naam"><br><br>
                <p>Achternaam: </p>
                <input type="text" name="lastName" placeholder="Achternaam"><br><br>
                <p>Telefoon nummer: </p>
                <input type="text" name="phone" placeholder="Telefoon"><br><br>
                <p>Email: </p>
                <input type="text" name="email" placeholder="Email"><br><br>
                <p>Workshop keuze: </p>
                <input type="text" name="ws" placeholder="Workshop" list="workshops">
                <br><br>
                <p>Hoeveelheid mensen </p>
                <input type="number" name="persons" placeholder="Personen" list="workshops">
                <br><br>
<p>Tijd:</p>

                <datalist id="workshops">
                  <option value="Indonesische rijsttafel">
                  <option value="Paella">
                  <option value="Sushi">
                  <option value="Mexicaanse mix">
                  <option value="Bourgondische keuken">
                </datalist>
                <input type="submit" value="Submit">
                
<?php
    $stmt = $conn->prepare("INSERT INTO reserve-form (id, firstName, email, phone, ws, lastName, date, persons) VALUES (null, ?, ?, ?, ?, ?, ?, ?)");
    if (isset($_POST["firstName"])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $ws = $_POST['ws'];
        $persons = $_POST['persons'];

      $stmt->bind_param("sssssii", $firstName, $email, $phone, $ws, $lastName, $date, $persons);
      $stmt->execute();
      header("Location: contactpagina.php");
    }
  ?>
            </form>

            </div>

        </div>
        <?php include 'footer.php'?>
    </body>

</html>