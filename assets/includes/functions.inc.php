<?php

# function used in the signup.inc.php used to check if fields are empty
function emptyFieldSignup($empName, $empEmail, $empUID, $empPwd, $empPwdConfirm) {
  $result;
  if (empty($empName) || empty($emptyEmail) || empty($empUID) || empty($empPwd) || empty($empPwdConfirm)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

#function used in the signup.inc.php used to check if the user is properly formatted
function wrongUID($empUID) {
  $result;
  if (preg_match("/^[a-zA-Z0-9]*$/"), $empUID) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}
