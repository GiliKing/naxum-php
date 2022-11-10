<?php

// local host connection variable
$hostname = "localhost";
$user_name = "root";
$user_pass  = "";
$base_name = "reg-page";


// connect to the database 
$conn = mysqli_connect($hostname, $user_name, $user_pass, $base_name) or die("Could Not Connect");


?>