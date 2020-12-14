<?php

function emptyFieldSignup($empName, $empEmail, $empUID, $empPwd, $empPwdConfirm) {
  $result;
  if (empty($empName) || empty($emptyEmail) || empty($empUID) || empty($empPwd) || empty($empPwdConfirm)) {
    $result = true;
  } else {
    $result = false;
  }
}
