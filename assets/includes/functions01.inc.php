<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

function showEmp($conn) {
  $sql = "call list_emp();";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../../../signup.php?error=sqlfail");
    exit();
  }
  
  function showCustomers($conn) {
  $sql = "call list_customers();";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../../../signup.php?error=sqlfail");
    exit();
  }
  
  function showVendors($conn) {
  $sql = "call list_vendors();";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../../../signup.php?error=sqlfail");
    exit();
  }
  
  function showSales($conn) {
  $sql = "call list_sales();";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../../../signup.php?error=sqlfail");
    exit();
  }
  
  function showEmp_timecards($conn) {
  $sql = "call emp_timecard();";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../../../signup.php?error=sqlfail");
    exit();
  }
  
  function showInventory($conn) {
  $sql = "call list_inventory();";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../../../signup.php?error=sqlfail");
    exit();
  }
  
  function showUnprocessed($conn) {
  $sql = "call not_processed();";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../../../signup.php?error=sqlfail");
    exit();
  }
  
//Experimental
  function deleteEmp($conn, empid) {
  $sql = "call delete_emp(?);";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../../../signup.php?error=sqlfail");
    exit();
  }
  
//YEET BUTTON, BE CAREFUL
  function yeet($conn) {
  $sql = "call yeet();";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../../../signup.php?error=sqlfail");
    exit();
  }
