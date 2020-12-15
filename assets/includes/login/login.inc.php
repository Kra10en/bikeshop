<?php


if (isset($_POST["loginSubmit"])) {

  $empEmail = $_POST["email"];
  $empPwd = $_POST["pwd"];

  require_once '../conn/loginConn.inc.php';
  require_once '../functions.inc.php';

  if (emptyFieldLogin($empEmail, $empPwd) == true) {
    header("location: ../../../login.php?error=emptyfields");
    exit();
  }

  loginEmp($conn, $empEmail, $empPwd);

} else {
  header("location: ../../../login.php");
  exit();
}
