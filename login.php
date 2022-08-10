<?php 

require_once ('connection.php');

if(isset($_POST['email'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
    $password = mysqli_real_escape_string($connection,$password);
    $username = mysqli_real_escape_string($connection,$username);
    $query_username = "SELECT STU_EMAIL,STU_PASSWORD from STUDENT WHERE STU_EMAIL = '$email' ";
    $result =  mysqli_query($connection,$query_username);
    
    $row_username = mysqli_num_rows($result);
    
    if($row_username > 0 ){
        $data = mysqli_fetch_assoc($result);
        $pwd = $data['STU_PASSWORD']; // the password in database must be greater than 60 of length
        
        if($pwd == $password){
            session_start();
            $_SESSION['email'] = $email;
            header("location: user.php");
        } else {
            echo "wrong password";
        }
    } else {
        echo "username does not exist";
	// header("location: loginsignup.php");
    }
}

?>