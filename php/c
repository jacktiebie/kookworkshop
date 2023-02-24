<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/reservations.css">
</head>

<body>
    <?php include 'navbar.php' ?>
    <div class="container">
        <div class="topdiv">
            <b>
                <h1 class="white">Reserveren</h1>
            </b>
        </div>


        <div class="middiv">
            <datalist id="workshops">
                <option value="Indonesische rijsttafel">
                <option value="Paella">
                <option value="Sushi">
                <option value="Mexicaanse mix">
                <option value="Bourgondische keuken">
            </datalist>
            </form>
            <form action="../includes/reserve.inc.php" method="post">
                <p>
                    <label for="firstName">First Name:</label>
                    <input type="text" name="firstName" id="firstName">
                </p><br>
                <p>
                    <label for="lastName">Last Name:</label>
                    <input type="text" name="lastName" id="lastName">
                </p><br>
                <p>
                    <label for="Email">Email:</label>
                    <input type="text" name="email" id="Email">
                </p><br>
                <p>
                    <label for="Address">Phone:</label>
                    <input type="text" name="phone" id="Address">
                </p><br>
                <p>
                    <label for="Date">Date:</label>
                    <input type="date" name="date" id="Date">
                </p><br>
                <p>
                    <label for="Ws">Workshops:</label>
                    <input type="text" name="ws" id="Ws" list="workshops">
                </p><br>
                <p>
                    <label for="Persons">Persons:</label>
                    <input type="number" name="persons" id="Persons">
                </p><br>
                <input type="submit" class="reservebut" value="Submit">
            </form>
        </div>

    </div>
    <?php include 'footer.php' ?>
</body>

</html>