<?php
//Deze functie checked of alle functie en geeft een foutmelding bij een false en execute het programma bij en true
if (isset($_POST["submit"])) {
    $username = $_POST["usersUid"];    
    $pwd = $_POST["usersPwd"];

    require_once '../database.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../inloggen.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
}
else {
    header("location: ../inloggen.php");
    exit();
}