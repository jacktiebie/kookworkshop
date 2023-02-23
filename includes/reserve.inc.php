<?php
include 'db.inc.php';

if(isset($_post['submit'])){
    if(!empty($_post['firstName']) && !empty($_post['lastName']) && !empty($_post['email']) && !empty($_post['phone']) && !empty($_post['date']) && !empty($_post['ws']) && !empty($_post['persons'])){

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $ws = $_POST['ws'];
        $persons = $_POST['persons'];
        print $firstName;
        $query = "INSERT INTO reserve-form(firstName,lastName,email,phone,date,ws,persons) values('$firstName' , '$lastName' , '$email' , '$phone' , '$date' , '$ws' , '$persons')";
        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if($run){
            echo " Reservering gemaakt";
        }
        else {
            echo "unsuccesfull";
        }

    }
else{
    echo "Vul alles in...";
    }
}



?>