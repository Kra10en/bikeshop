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
                <form>
                    <div class="form-group"><label for="name">First Name</label><input class="form-control item" name="fname" type="text" id="name"></div>
                    <div class="form-group"><label for="name">Last Name</label><input class="form-control item" name="lname" type="text" id="name"></div>
                    <div class="form-group"><label for="email">Email</label><input class="form-control item" name="email" type="email" id="email"></div>
                    <div class="form-group"><label for="password">Password</label><input class="form-control item" name="pwd" type="password" placeholder="*****************" id="password"></div>
                    <div class="form-group"><label for="password">Confirm Password</label><input class="form-control item" name="pwdConfirm" type="password" placeholder="*****************" id="password"></div>
                    <button class="btn btn-primary btn-block" type="submit">Sign Up</button></form>
            </div>
        </section>
    </main>

    <?php
      if(isset($_GET["error"])) {
        if ($_GET["error"] == "emptyfields") {
          echo "<p>Fill in the fields</p>";
        }elseif ($_GET["error"] == "wrongemail") {

        }elseif ($_GET["error"] == "nomatchpasswords") {

        }elseif ($_GET["error"] == "emailexists") {

        }elseif ($_GET["error"] == "sqlfail") {

        }elseif ($_GET["error"] == "noerror") {

        }
      }
     ?>

<?php
#=================================END-BODY======================================
    include('./skel/footer.php');
#}
?>
