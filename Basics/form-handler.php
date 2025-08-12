<?php
    if (isset($_POST['formSaved'])) {
        
        $fullName = $_POST['full']; // napata kwenye name ya input field
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phoneNumber = $_POST['phone'];

        echo "Your full  name ".$fullName."<br> locaton ".$address."<br> email address ".$email."<br> phone number ".$phoneNumber;
    } else {
        header("location:php-form.php");
    }
?>