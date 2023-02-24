<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/wineOrder.css">
    <title>Document</title>
</head>

<body>
    <!-- Navigatiebalk en databaseconnectie -->
    <?php
    include '../includes/db.inc.php';
    include 'navbar.php';
    ?>
    <div>
        <div class="wineOrderDiv">
            <?php
            SESSION_START();
            $useruid = $_SESSION["useruid"];


            if (!(isset($_SESSION['cart']))) {
                $_SESSION['cart'] = array();
            } //if cart

            $out = "";
            //buy
            if (isset($_GET['ID'])) {
                $pID = $_GET['ID'];
                $quan = $_GET['quantity'];
                if ($quan > 0 && filter_var($quan, FILTER_VALIDATE_INT)) {
                    if (isset($_SESSION['cart'][$pID])) {
                        $_SESSION['cart'][$pID] += $quan;
                    } else {
                        $_SESSION['cart'][$pID] = $quan;
                    } //if buy case
                } else {
                    echo $out = "Bad Input";
                } //if bad input
            } //isset

            //clear cart
            if (isset($_GET['clear'])) {
                $_SESSION['cart'] = array();
            }


            //krijg alle items van de drinkcard tabel
            $query = "SELECT * FROM drinkcard ORDER BY name ASC";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) { ?>
                    <div>
                        <form method="get" action="wineOrder.php">

                            <img class="shop__right__item__img" src="images/placeholder.png" /><br />
                            <h4 class="shop__right__item__name"><?php echo $row["name"]; ?></h4>
                            <h4 class="shop__right__item__price">$<?php echo $row["price"]; ?></h4>
                            <h4>In stock: <?php echo $row["inStock"]; ?></h4>
                            <input type="text" name="quantity" value="1" class="form-control" />
                            <input type="hidden" name="ID" id="ID" value='<?php echo $row['ID'] ?>'>
                            <input type="submit" name="submit1" style="margin-top:5px;" value="Add to Cart" />
                        </form>
                    </div>
            <?php
                }
            }
            ?>


        </div>
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>?clear=1">Clear Cart</a>

    </div>
    <?php
    include 'footer.php';
    echo "<pre>";
    print_r($_SESSION['cart']);
    echo "</pre>";
    ?>
</body>

</html>