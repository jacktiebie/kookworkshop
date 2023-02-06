<?php
//Deze functie checked of er registratieforum velden leeg zijn
function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
  $result;
  if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
      $result = true;     
  }
  else {
      $result = false;
  }
  return $result;
}
//Deze functie checked of de contect van de Uid goed genoeg is
function invalidUid($username) {
  $result;
  if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
      $result = true;     
  }
  else {
      $result = false;
  }
  return $result;
}
//Deze functie checked of de content van de Email goed genoeg is
function invalidEmail($email) {
  $result;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $result = true;     
  }
  else {
      $result = false;
  }
  return $result;
}
//Deze functie checked het wachtwoord gelijk is als het herhaalde wachtwoord
function pwdMatch($pwd, $pwdRepeat) {
  $result;
  if ($pwd !== $pwdRepeat) {
      $result = true;     
  }
  else {
      $result = false;
  }
  return $result;
}
//Deze functie checked of de data die de gebruiker in het registratieforum heeft ingevoerd als bestaat in de database
function uidExists($conn, $username, $email) {
  $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
  $stmt = mysqli_stmt_init($conn); 
  if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../registreren.php?error=stmtfailed");
      exit(); 
  }

  mysqli_stmt_bind_param($stmt, "ss", $username, $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
      return $row;
  }
  else {
      $result = false;
      return $result;
  }

  mysqli_stmt_close($stmt);
}
//Deze functie checked zorgt er voor dat de data die uit de registratieforum in de database komt met een hashedwachtwoord
function createUser($conn, $name, $email, $username, $pwd) {
  $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn); 
  if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../registreren.php?error=stmtfailed");
      exit(); 
  }

  $hashedPwd = Password_hash($pwd, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../registreren.php?error=none");
  exit();
}
//Deze functie checked of de loginforum velden leeg zijn
function emptyInputLogin($username, $pwd) {
  $result;
  if (empty($username) || empty($pwd)) {
      $result = true;     
  }
  else {
      $result = false;
  }
  return $result;
}
//Deze functie checked of de gevens in de loginforum overeen komt met een van de users in de database
function loginUser($conn, $username, $pwd) {
  $uidExists = uidExists($conn, $username, $username);

  if ($uidExists === false) {
      header("location: ../inloggen.php?error=wronglogin");
      exit(); 
  }
 
  $pwdHashed = $uidExists["usersPwd"];
  $checkPwd = password_verify($pwd, $pwdHashed);

  if ($checkPwd === false) {
      header("location: ../inloggen.php?error=wronglogin");
      exit(); 
  }
  else if ($checkPwd === true) {
      session_start();
      $_SESSION["userid"] = $uidExists["usersId"];
      $_SESSION["useruid"] = $uidExists["usersUid"];
      header("location: ../index.php");
      exit();
  }
}

//Deze functie checked zorgt er voor dat de data die uit de registratieforum in de database komt met een hashedwachtwoord
function createAdmin($conn, $name, $email, $username, $pwd, $admin) {
  $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd, usersAdmin) VALUES (?, ?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn); 
  if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../admin.php?error=stmtfailed");
      exit(); 
  }
}