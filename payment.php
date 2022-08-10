<?php 
    require_once('connection.php');

    $student_id = $_POST['student_id'];
    $amount = $_POST['amount'];
    $payment_type = $_POST['payment_type'];

    echo $student_id;
    echo $amount;
    echo $payment_type;

    $query = "INSERT INTO PAYMENT (PAYMENT_ID, PAYMENT_TYPE, STU_ID, PAYMENT_TIME, PAYMENT_AMOUNT) VALUES ('', '$payment_type', '$student_id', CURRENT_TIMESTAMP, '$amount')";

    $result = mysqli_query($connection,$query);
    
    header('Location:adminpanel.php');

?>