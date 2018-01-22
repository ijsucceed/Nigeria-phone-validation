<?php
require_once "phone.validate.php";

/* Save phone number into db */

$db_server = "Localhost"; // host name
$db_user   = " "; // Enter db user
$db_pass   = " "; // Enter db pass
$db_name   = " "; // Enter db name

$conn = new Mysqli($db_server, $db_user, $db_pass, $db_name); // sql conn

if($_POST['save']) {
    // number sent over
    $phone_number = htmlspecialchars(stripcslashes($_POST['phone_input']));
    
    // Validate phone number 
    // Incase javascript is disabled
    if(validate_phone($phone_number)) { 
       
       $sql = "INSERT INTO phone_numbers(numbers) VALUES('{$phone_number}')";

       if($conn->query($sql))
          echo "saved";
       else
          echo "found";
    } 
    else {
        echo "failed";
    } 
}

$conn = null;
