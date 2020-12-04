<?php

session_start();

#if (!isset($_SESSION['userID'])) {
#    echo '<h1>ERROR 404 PAGE NOT FOUND</h1>';
#} else {

    echo '<title>Admin Dashboard</title>';

    include('./skel/header.php');
    include('./skel/nav.php');
#====================================BODY=======================================
?>
<main class="page">
  <section class="clean-block dark">
      <div class="container">
        <br>
        <h1> Good to be back right (NAME) </h1>
        <div class="input-group">
          <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
            <option selected>Choose...</option>
            <option value="1">Today</option>
            <option value="2">This week</option>
            <option value="3">This month</option>
            <option value="4">This year</option>
          </select>
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button">Average Sale</button>
        </div>
      </div>
      <br>
      <div class="Register">
      <button type="button" class="btn btn-outline-warning">Register New User</button>
      </div>
      <br>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Employee 00</li>
        <li class="list-group-item">Employee 01</li>
        <li class="list-group-item">Employee 02</li>
        <li class="list-group-item">Employee 03</li>
        <li class="list-group-item">Employee 04</li>
        <button type="button" href="./employees.php" class="list-group-item list-group-item-action active">Employees Records</button>
      </ul>
    </div>
  </section>
</main>
<?php
#=================================END-BODY======================================
    include('./skel/footer.php');
#}
?>
