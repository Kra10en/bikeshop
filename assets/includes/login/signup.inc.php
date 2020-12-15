<?php

if (isset($_POST["addEmpSubmit"])) {
  $empName = $_POST["name"];
  $empEmail = $_POST["email"];
  $empPwd = $_POST["pwd"];
  $empPwdConfirm = $_POST["pwdConfirm"];

  require_once 'adminConn.inc.php';
  require_once 'functions.inc.php';

  if (emptyFieldSignup($empName, $empEmail, $empPwd, $empPwdConfirm) == true ) {
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
  if (emailExists($conn, $empEmail) == true ) {
    header("location: ../../../signup.php?error=emailExists!");
    exit();
  }

  createEmp($conn, $empName, $empEmail, $empPwd);

}else {
  header("location: ../../../signup.php");

}
