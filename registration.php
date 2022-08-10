<?php 
    require_once('connection.php');
    $student_id = $_POST['student_id'];
    $course_id = $_POST['course_id'];
    echo $student_id;
    echo $course_id;

    $query = "INSERT INTO ATTENDANCE (ATT_NUM , STU_ID , CLASS_NUM ) VALUES ('', '$student_id', '$course_id')";

    $result = mysqli_query($connection,$query);

    header('Location:adminpanel.php');

?>