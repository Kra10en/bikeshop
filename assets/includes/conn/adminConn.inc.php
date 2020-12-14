<?php

$serverLocation = "localhost";
$userDB = "nick";
$paswdDB = "";
$nameDB = "bikeshop";

$conn = mysqli_connect($serverLocation, $userDB, $paswdDB, $nameDB);

if($conn) {
  echo "Connection success!!!";
} else {
  die("Connection failed!!! ".mysqli_connect_error());
}
