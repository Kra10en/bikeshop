<?php

$serverLocation = "localhost";
$userDB = "lsamha";
$paswdDB = "oweH%qJs_oMWJNHj9#*";
$nameDB = "bikeshop";

$conn = mysqli_connect($serverLocation, $userDB, $paswdDB, $nameDB);

if($conn) {
  echo "Connection success!!!";
} else {
  die("Connection failed!!! ".mysqli_connect_error());
}
