<?php

include 'db.inc.php';
$id = null;
$first_name = $_REQUEST['firstName'];
$last_name = $_REQUEST['lastName'];
$gender = $_REQUEST['email'];
$address = $_REQUEST['phone'];
$email = $_REQUEST['date'];
$ws = $_REQUEST['ws'];
$persons = $_REQUEST['persons'];

// We are going to insert the data into our sampleDB table
$sql = "INSERT INTO reserveform VALUES ('$id','$first_name',
            '$last_name','$gender','$address','$email','$ws','$persons')";

// Check if the query is successful
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
