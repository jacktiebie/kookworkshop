<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
include '../includes/db.inc.php';
include 'navbar.php';
SESSION_START();
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
    <form action="includes/checkout.inc.php" method="get">
        <label for="address">Address</label>
        <input type="textarea" name="address">

        <label for="city">City</label>
        <input type="text" name="city">

        <label for="postal_code">Postal Code</label>
        <input type="textarea" name="postal_code">

        <label for="country">Country</label>
        <input name="country" list="countries">

        <datalist id="countries">
            <option value="Netherlands">
            <option value="England">
            <option value="Germany">
            <option value="France">
            <option value="South Africa">
        </datalist>


        <input type="submit" value="Check Out">
    </form>
</body>

</html>