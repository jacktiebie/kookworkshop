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
            <form action="../includes/reserve.inc.php" method="post">
                <p>Datum: </p>
                <input type="date" name="date" placeholder="Datum afspraak"><br><br>
                <p>Voornaam: </p>
                <input type="text" name="firstName" placeholder="Naam"><br><br>
                <p>Achternaam: </p>
                <input type="text" name="lastName" placeholder="Datum afspraak"><br><br>
                <p>Telefoon nummer: </p>
                <input type="text" name="phone" placeholder="Telefoon"><br><br>
                <p>Workshop keuze: </p>
                <input type="text" name="ws" placeholder="Workshop" list="workshops">
                <br><br>
                <p>Hoeveelheid mensen </p>
                <input type="number" name="Personen" placeholder="Personen" list="workshops">
                <br><br>
<p>Tijd:</p>

<input type="submit" value="Submit">

                <datalist id="workshops">
                  <option value="Indonesische rijsttafel">
                  <option value="Paella">
                  <option value="Sushi">
                  <option value="Mexicaanse mix">
                  <option value="Bourgondische keuken">
                </datalist>
            </form>

            </div>

        </div>
        <?php include 'footer.php'?>
    </body>

</html>