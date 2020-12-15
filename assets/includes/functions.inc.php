<?php

# function used in the signup.inc.php used to check if fields are empty
function emptyFieldSignup($empName, $empEmail, $empPwd, $empPwdConfirm) {
  $result;
  if (empty($empName) || empty($emptyEmail) || empty($empPwd) || empty($empPwdConfirm)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

#function used in the signup.inc.php used to check if the email is in the proper format
function wrongEmail($empEmail) {
  $result;
  if (filter_var($email, FILTER_VALIDATE_EMAIL) {
    $result = false;
  } else {
    $result = true;
  }
  return $result;
}

#function used in the signup.inc.php used to check if the passwords match
function passwordConfirm($empPwd, $empPwdConfirm) {
  $result;
  if ($empPwd == $empPwdConfirm) {
    $result = false;
  } else {
    $result = true;
  }
  return $result;
}

function emailExists($conn, $empEmail) {
  $sql = "SELECT * FROM person WHERE `e-mail` = ?; ";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../../../signup.php?error=sqlFailed");
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
