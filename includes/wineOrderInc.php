<?php
include './db.inc.php';
$id = null;
SESSION_START();
$useruid = $_SESSION["useruid"];
$sql = "INSERT INTO reserveringen VALUES ($id, $useruid, $workshopID, $date, $persons)";




if (mysqli_query($conn, $sql)) {
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    echo nl2br("\n$first_name\n $last_name\n "
        . "$gender\n $address\n $email");
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
