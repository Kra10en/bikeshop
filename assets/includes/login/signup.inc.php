<?php

if (isset($_POST["addEmpSubmit"])) {
  $empFname = $_POST["fname"];
  $empLname = $_POST["lname"];
  $empEmail = $_POST["email"];
  $empPwd = $_POST["pwd"];
  $empPwdConfirm = $_POST["pwdConfirm"];

  require_once '../conn/adminConn.inc.php';
  require_once '../functions.inc.php';

  if (emptyFieldSignup($empFname, $empLname, $empEmail, $empPwd, $empPwdConfirm) == true ) {
    header("location: ../../../signup.php?error=emptyfields");
    exit();
  }
  if (wrongEmail($empEmail) == true ) {
    header("location: ../../../signup.php?error=wrongemail");
    exit();
  }
  if (passwordConfirm($empPwd, $empPwdConfirm) == true ) {
    header("location: ../../../signup.php?error=nomatchpasswords");
    exit();
  }
  if (emailExists($conn, $empEmail) == true ) {
    header("location: ../../../signup.php?error=emailexists");
    exit();
  }

  createEmp($conn, $empFname, $empLname, $empEmail, $empPwd);

}else {
  header("location: ../../../signup.php");
  exit();

}
