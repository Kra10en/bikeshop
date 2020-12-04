<?php

session_start();

if (!isset($_SESSION['userID'])) {
    echo '<h1>ERROR 404 PAGE NOT FOUND</h1>';
} else {

    echo '<title>Vendors Data</title>';
    
    include('./skel/header.php');
    include('./skel/navEmployee.php');
#====================================BODY=======================================
?>


<?php
#=================================END-BODY======================================
    include('./skel/footer.php');
}
?>

