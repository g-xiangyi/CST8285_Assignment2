<?php

$servername = "localhost";
$server_username = "root";
$password = "";
$database = 'kungfu';

$connection = mysqli_connect($servername,$server_username,$password,$database);

	if($connection -> connect_error){
        die("the connection failed".$connection -> connect_error);
	}

	//echo "connected successfully";
    
?>