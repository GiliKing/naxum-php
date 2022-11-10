
<?php


  // checking if the user has indeed fill all inputs
  if(empty($name)){
    $errors[] = "<div class='alert alert-danger'>Please enter your name</div>";
}

if(empty($birthdate)){
    $errors[] = "<div class='alert alert-danger'>Please enter your birthdate</div>";
}

if(empty($address)){
    $errors[] = "<div class='alert alert-danger'>Please enter your address</div>";
}

if(empty($cardnumber)){
    $errors[] = "<div class='alert alert-danger'>Please enter your cardnumber</div>";
}

if(empty($expiration)){
    $errors[] = "<div class='alert alert-danger'>Please enter your card expiration date</div>";
}

if(empty($cvcode)){
    $errors[] = "<div class='alert alert-danger'>Please enter your cvcode</div>";
}

if(empty($cardowner)){
    $errors[] = "<div class='alert alert-danger'>Please enter the card owner name</div>";
}

if(empty($image_file_name)){
    $errors[] = "<div class='alert alert-danger'>Please choose an image file</div>";
}

// check if image file is not greater that 5MB
if($image_file['size'] > 5548687){
    $errors[] = "<div class='alert alert-danger'>The choosen image file is more than 5MB</div>";
}

if(!empty($cardowner) && !is_numeric($cardnumber)){
    $errors[] = "<div class='alert alert-danger'>Your card number must be a number</div>";
}

if(!empty($cvcode) && !is_numeric($cvcode)){
    $errors[] = "<div class='alert alert-danger'>Your cv code must be a number</div>";
}

if(strlen($cardnumber) == 0) {
    // do nothing
} elseif (strlen($cardnumber) > 16 ||  strlen($cardnumber) < 16){
    $errors[] = "<div class='alert alert-danger'>Your card number must be 16 in total</div>";
}


if(strlen($cvcode) == 0) {
    // do nothing
} elseif (strlen($cvcode) > 3  || strlen($cvcode) < 3){
    $errors[] = "<div class='alert alert-danger'>Your cv code must be 3 in total</div>";
}

?>