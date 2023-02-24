<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<a href="./wineOrder.php">Terug naar Wijn Bestellen</a>
<?php
include '../includes/db.inc.php';
include 'navbar.php';
if (!(isset($_SESSION['cart']))) {
    $_SESSION['cart'] = array();
} //if cart
//clear cart
if (isset($_GET['clear'])) {
    $_SESSION['cart'] = array();
}

if (isset($_GET['pID'])) {
    $pID = $_GET['pID'];
    $quan = $_GET['quan'];

    if ($quan > 0 && filter_var($quan, FILTER_VALIDATE_INT)) {
        //update the quan
        $_SESSION['cart'][$pID] = $quan;
    } else if ($quan == 0) {
        unset($_SESSION['cart'][$pID]);
    } else {
        echo "Bad Input";
    } //if valid quan
} //isset
?>
<form action="../includes/wineOrderInc.php" method="GET">

    <body>
        <table>
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <?php

            $grand = 0;
            foreach ($_SESSION['cart'] as $key => $val) {
                $sql = "SELECT * FROM drinkcard where ID = '$key'";
                $result = mysqli_query($conn, $sql) or die("BAD SQL: $sql");
                $row = mysqli_fetch_assoc($result);

                $sub = $val * $row['price'];
                $grand += $sub;
                echo "
        <tr>
            <td>{$row['name']}</td>
            <td>$ {$row['price']}</td>
            <td>
            <form action='' method='GET'>
                <input value='$val' name='quan'>
                <input type='hidden' value='$key' name='pID'>
                <input type='submit'>
            </form>
            </td>
            <td>$sub</td>
        </tr>
        ";
            } //foreach

            if (empty($_SESSION['cart'])) {
                echo "<tr><td colspan='4'>Your cart is empty</td></tr>";
            } else {
                echo "<tr><td colspan='4'>Grand Total: $grand</td></tr>";
            } //empty
            ?>


        </table>

        <a href="<?php echo $_SERVER['PHP_SELF']; ?>?clear=1">Clear Cart</a>
        </div>

        <h4>Personal Details</h4>

        <input type="submit" value="Check Out">
</form>
</body>

</html>