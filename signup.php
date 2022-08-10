<?php 

    require_once('connection.php');

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $dateofbirth = $_POST['dateofbirth'];
    $email = $_POST['email'];
    $mom_phone = $_POST['mom_phone'];
    $dad_phone = $_POST['dad_phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];


    $query = "INSERT INTO STUDENT (STU_ID , STU_BIRTHDAY, STU_JOINDATE, STU_ADDRESS, 
            STU_PHONE, STU_EMAIL, STU_FNAME, STU_LNAME, STU_MOMPHONE, STU_DADPHONE, 
            STU_RANK, STU_PASSWORD) 
        VALUES (NULL,'$dateofbirth',CURRENT_TIMESTAMP,' $address', '$phone'
    , '$email', '$first_name', '$last_name', '$mom_phone', '$dad_phone', 'White', '$password')";

    $result = mysqli_query($connection,$query);
    if($result){
        session_start('STU_EMAIL');
        header('Location:user.php');
    }else {
        echo "failed".mysqli_error($connection);
    }

    //close($connection);

?>