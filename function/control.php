
<?php

$display_startup_errors = 1;

function registerEvent($name, $birthdate, $address, $cardnumber, $expiration, $cvcode, $cardowner, $photo_path) {

    // first check if the user already exit
    $responce_check = check($name);

    if($responce_check == true) {

        echo "<div class='alert alert-success'>User Already Registered</div>";

    } else {

        // if the user do not exit
        // connect to th database
        require "database/connect.php";

        // excape any injection to aviod  any database manipulation
        $name_entry = mysqli_real_escape_string($conn, $name);
        $birthdate_entry = mysqli_real_escape_string($conn, $birthdate);
        $address_entry = mysqli_real_escape_string($conn, $address);
        $cardnumber_entry = mysqli_real_escape_string($conn, $cardnumber);
        $expiration_entry = mysqli_real_escape_string($conn, $expiration);
        $cvcode_entry = mysqli_real_escape_string($conn, $cvcode);
        $cardowner_entry = mysqli_real_escape_string($conn, $cardowner);
        $photo_entry = mysqli_real_escape_string($conn, $photo_path);

        // database scheme
        $event_register = "INSERT INTO `users` (`name`, `birthdate`, `address`, `cardnumber`, `expiration`, `cvcode`, `cardowner`, `photo_path`) VALUES('$name_entry', '$birthdate_entry', '$address_entry', '$cardnumber_entry', '$expiration_entry', '$cvcode_entry', '$cardowner_entry', '$photo_entry')";

        // connect and query the database
        $check = mysqli_query($conn, $event_register);

        // echo $event_result_register;


        if($check) {

            echo "<div class='alert alert-success'>Entry Added Successfully</div>";

        } else  {
            
            echo mysqli_error($conn);

        }

    }

    

}


// logic to check for user
function check($name) {

    // connect to the database
    require 'database/connect.php';

    $name_entry = mysqli_real_escape_string($conn, $name);

    $cardnumber_entry = mysqli_real_escape_string($conn, $cardnumber);

    // database scheme
    $user_query = "SELECT * FROM `users` WHERE `name` = '$name_entry' LIMIT 1";

    $users_result = mysqli_query($conn, $user_query);

    if($users_result) {

        if (mysqli_num_rows($users_result) == 1) {
        
            return true;

        } else {

            return false;
            
        }

    }else {

        echo mysqli_error($conn);

    }


}


?>