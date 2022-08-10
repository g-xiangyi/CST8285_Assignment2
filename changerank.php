<?php 
    require_once("connection.php");
    $email = $_POST['email'];
    $rank = $_POST['rank'];

    $query = "UPDATE STUDENT SET STU_RANK = '$rank' where STU_EMAIL = '$email'";

    $connection ->query($query);
    header('location: adminpanel.php');

?>