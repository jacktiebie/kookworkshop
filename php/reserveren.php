<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contact Form</title>
    </head>
    <body>
        <main>
            <p>Send e-mail</p>
            <form action="contactform.php" method="post">
                <input type="date" name="date" placeholder="Datum afspraak">
                <input type="text" name="ws" placeholder="Workshop" list="workshops">
                <button type="submit" name="submit">Reserveer</button>

                <input type="radio" id="time1" name="age" value="30">
                <label for="time1">09:00 - 13:00</label><br>
                <input type="radio" id="time2" name="age" value="60">
                <label for="time2">14:00 - 18:00</label><br>  
                  <input type="submit" value="Submit">

                <datalist id="workshops">
                  <option value="Indonesische rijsttafel">
                  <option value="Paella">
                  <option value="Sushi">
                  <option value="Mexicaanse mix">
                  <option value="Bourgondische keuken">
                </datalist>
            </form>
        </main>
    </body>
</html>