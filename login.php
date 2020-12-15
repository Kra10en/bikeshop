<?php

    echo '<title>Login - Bshop</title>';

    include('./skel/header.php');
    include('./skel/navLogin.php');
#====================================BODY=======================================

if (isset($_SESSION['userID'])) {} else {

?>
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Log In</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <form action="assets/includes/login/login.inc.php" method="post">
                    <div class="form-group"><label for="email">Email</label><input class="form-control item" type="email" name="email" id="email"></div>
                    <div class="form-group"><label for="password">Password</label><input class="form-control" type="password" name="pwd" id="password"></div>
                    <div class="form-group">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="checkbox"><label class="form-check-label" for="checkbox">Remember me</label></div>
                    </div><button class="btn btn-primary btn-block" type="submit" name="loginSubmit">Log In</button></form>
            </div>
            <?php
              if(isset($_GET["error"])) {
                if ($_GET["error"] == "emptyfields") {
                  echo "<p>Fill in the fields</p>";
                }else if ($_GET["error"] == "invalidlogin") {
                  echo "<p>Something is not right! try again OO</p>";
                }
              }
             ?>
        </section>
    </main>
<?php
}

#=================================END-BODY======================================
    include('./skel/footer.php');
?>
