<?php

//check if the submit buton has been clicked
if(isset($_POST['upload'])){

    // only these allowed type will be submitted
	$allowed_types = ['image/png', 'image/jpeg', 'image/PNG', 'image/JPG'];

    // stored the information in a variable
	$image_file = $_FILES['profpic'];
    $name = htmlspecialchars(trim($_POST['nameuser']));
    $birthdate = htmlspecialchars(trim($_POST['birthdate']));
    $address = htmlspecialchars(trim($_POST['address']));
    $cardnumber = htmlspecialchars(trim($_POST['cardnumber']));
    $expiration = htmlspecialchars(trim($_POST['expiration']));
    $cvcode = htmlspecialchars(trim($_POST['cvcode']));
    $cardowner = htmlspecialchars(trim($_POST['cardowner']));


    // get the neccessary information of the image choosen
	$image_file_name = $image_file['name'];
	$image_file_type = $image_file['type'];
	$image_file_tmp = $image_file['tmp_name'];
    $random_number = rand();
    $id = "asset";


    require "partial/help.php";


    // if there is no error carry out this logic
    if(empty($errors)){

        if(in_array($image_file_type, $allowed_types)){

            if(!is_dir("{$id}")){
                mkdir("{$id}");
            }

            // store the image path in this variable
            $photo_path = "{$id}/{$random_number}{$image_file_name}";

            move_uploaded_file($image_file_tmp, $photo_path);

            // add this to the database..
            require "function/control.php";

            $feedback = registerEvent($name, $birthdate, $address, $cardnumber, $expiration, $cvcode, $cardowner, $photo_path);

            echo $feedback;


        } else {

            echo "Your file type is not allowed";

        }
    } else {
        forEach($errors as $error) {
            echo "{$error}<br>";
        }
    }

}


?>