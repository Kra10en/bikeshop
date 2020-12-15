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
                    <h2 class="text-info">Registration</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <form>
                    <div class="form-group"><label for="name">Name</label><input class="form-control item" type="text" id="name"></div>
                    <div class="form-group"><label for="password">Password</label><input class="form-control item" type="password" id="password"></div>
                    <div class="form-group"><label for="email">Email</label><input class="form-control item" type="email" id="email"></div><button class="btn btn-primary btn-block" type="submit">Sign Up</button></form>
            </div>
        </section>
    </main>

<?php
#=================================END-BODY======================================
    include('./skel/footer.php');
#}
?>
