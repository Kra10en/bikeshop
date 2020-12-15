<?php

session_start();

#if (!isset($_SESSION['userID'])) {
#    echo '<h1>ERROR 404 PAGE NOT FOUND</h1>';
#} else {

    echo '<title>Register - Bshop</title>';

    include('./skel/header.php');
    include('./skel/navAdmin.php');
#====================================BODY=======================================
?>

    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Registrationi</h2>
                    <p>This page is to register an employee only accessable by the admin.</p>
                </div>
                <form action="assets/includes/login/signup.inc.php" method="post">
                    <div class="form-group"><label for="name">First Name</label><input class="form-control item" name="fname" type="text" id="name"></div>
                    <div class="form-group"><label for="name">Last Name</label><input class="form-control item" name="lname" type="text" id="name"></div>
                    <div class="form-group"><label for="email">Email</label><input class="form-control item" name="email" type="email" id="email"></div>
                    <div class="form-group"><label for="password">Password</label><input class="form-control item" name="pwd" type="password" placeholder="*****************" id="password"></div>
                    <div class="form-group"><label for="password">Confirm Password</label><input class="form-control item" name="pwdConfirm" type="password" placeholder="*****************" id="password"></div>
                    <button class="btn btn-primary btn-block" type="submit" name="addEmpSubmit">Sign Up</button></form>
            </div>
            <?php
              if(isset($_GET["error"])) {
                if ($_GET["error"] == "emptyfields") {
                  echo "<p>Fill in the fields</p>";
                }elseif ($_GET["error"] == "wrongemail") {
                  echo "<p>Email format is wrong!</p>";
                }elseif ($_GET["error"] == "nomatchpasswords") {
                  echo "<p>OH MY GOD the password is doesnt match. do it again...</p>";
                }elseif ($_GET["error"] == "emailexists") {
                  echo "<p>Email alread exists in the databases! hmmm...OO </p>";
                }elseif ($_GET["error"] == "sqlfail") {
                  echo "<p>statment failed lol</p>";
                }elseif ($_GET["error"] == "noerror") {
                  echo "<p>Employee has been registered! Cool! what is next? </p>";
                }
              }
             ?>
        </section>
    </main>



<?php
#=================================END-BODY======================================
    include('./skel/footer.php');
#}
?>
