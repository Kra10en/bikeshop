<?php

if (isset($_POST["addEmpSubmit"])) {
  $empName = $_POST["name"];
  $empEmail = $_POST["email"];
  $empUID = $_POST["uid"];
  $empPwd = $_POST["pwd"];
  $empPwdConfirm = $_POST["pwdConfirm"];

  require_once 'adminConn.inc.php';
  require_once 'functions.inc.php';

  if (emptyFieldSignup($empName, $empEmail, $empUID, $empPwd, $empPwdConfirm) == true ) {
    header("location: ../../../signup.php?error=emptyField");
    exit();
  }
  if (wrongUID($empUID) == true ) {
    header("location: ../../../signup.php?error=emptyField");
    exit();
  }
  if (wrongEmail($empEmail) == true ) {
    header("location: ../../../signup.php?error=wrongEmail");
    exit();
  }
  if (passwordConfirm($empPwd, $empPwdConfirm) == true ) {
    header("location: ../../../signup.php?error=passwordsNotMatching");
    exit();
  }
  if (takenUID($conn, $empUID) == true ) {
    header("location: ../../../signup.php?error=usernameBeenTaken");
    exit();
  }

  createEmp($conn, $empName, $empEmail, $empUID, $empPwd);

}else {
  header("location: ../../../signup.php");

}
