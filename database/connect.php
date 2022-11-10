<?php

// local host connection variable
$hostname = "us-cdbr-east-06.cleardb.net";
$user_name = "bdea5e57a54478";
$user_pass  = "cc1f0c28";
$base_name = "heroku_0b7851e02efd837";


// connect to the database 
$conn = mysqli_connect($hostname, $user_name, $user_pass, $base_name) or die("Could Not Connect");

?>