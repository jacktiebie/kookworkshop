<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/custom.css">
    <title>Document</title>
</head>

<body>
    <!-- Navigatiebalk en databaseconnectie -->
    <?php
    include '../includes/db.inc.php';
    include 'navbar.php';
    ?>
    <div>
        <?php
        //krijg alle items van de drinkcard tabel
        $sql = "SELECT ID, name, price, inStock FROM drinkcard";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "id: " . $row["ID"] . " inStock: " . $row["inStock"] . " - Name: " . $row["name"] . " " . $row["price"] . "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>

    </div>
    <?php
    include 'footer.php';
    ?>
</body>

</html>