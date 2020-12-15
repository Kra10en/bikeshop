<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

# function used in the signup.inc.php used to check if fields are empty
function emptyFieldSignup($empFname, $empLname, $empEmail, $empPwd, $empPwdConfirm) {
  $result;
  if (empty($empFname) || empty($empLname) || empty($emptyEmail) || empty($empPwd) || empty($empPwdConfirm)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

#function used in the signup.inc.php used to check if the email is in the proper format
function wrongEmail($empEmail) {
  $result;
  if (filter_var($empEmail, FILTER_VALIDATE_EMAIL)) {
    $result = false;
  } else {
    $result = true;
  }
  return $result;
}

#function used in the signup.inc.php used to check if the passwords match
function passwordConfirm($empPwd, $empPwdConfirm) {
  $result;
  if ($empPwd !== $empPwdConfirm) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function emailExists($conn, $empEmail) {
  $sql = "SELECT * FROM person WHERE `e-mail`=?; ";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../../../signup.php?error=sqlfail");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $empEmail);
  mysqli_stmt_execute($stmt);

  $resultStmt = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultStmt)){
    return $row;
  } else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}

function createEmp($conn, $empFname, $empLname, $empEmail, $empPwd) {
  $sql = "call add_employee(?,?,?,?);";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../../../signup.php?error=sqlfail");
    exit();
  }

  $empPwdHashed = password_hash($empPwd, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssss", $empFname, $empLname, $empEmail, $empPwdHashed);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  header("location: ../../../signup.php?error=noerror");
  exit();
}
#-----------------------------LOGIN-----------------------------------------------------------
#function been created to check if fields are empty when logging in
function emptyFieldSignup($empEmail, $empPwd) {
  $result;
  if (empty($emptyEmail) || empty($empPwd)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

#function created to log the user in.
function loginEmp($conn, $empEmail, $empPwd) {
  $emailExists = emailExists($conn, $empEmail);

  if ($emailExists === false) {
    header("location: ../../../login.php?error=invalidlogin");
  }
  $empPwdHashed = $emailExists["password"];

  $checkPwd = password_verify($empPwd, $empPwdHashed);

  if ($checkPwd === true) {
    session_start();
    $_SESSION["userID"] = $emailExists["employee-id"];
    $_SESSION["userE"] = $emailExists["e-mail"];
    header("location: ../../../employeeDash.php");
    exit();
  } else ($checkPwd === false) {
    header("location: ../../../login.php?error=invalidlogin");
    exit();
  }
}
