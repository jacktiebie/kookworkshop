<?php
//Deze functie checked of alle functie en geeft een foutmelding bij een false en execute het programma bij en true
if (isset($_POST["submit"])) {
    $name = $_POST["usersName"];
    $email = $_POST["usersEmail"];
    $username = $_POST["usersUid"];
    $pwd = $_POST["usersPwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../php/registreren.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../php/registreren.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../php/registreren.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../php/registreren.php?error=nomatchfound");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../php/registreren.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name , $email, $username, $pwd);
}
else {
    header("location: ../php/registreren.php"); 
    exit(); 
}