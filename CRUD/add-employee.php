<?php 
    ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

    require_once "connection.php";

    if (isset($_POST['register'])  && $_POST['register'] == "register employee") {
        $regNo = $_POST['regNo'];
        $last = $_POST['last'];
        $first = $_POST['first']; 
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];

        if (empty($regNo)) {
           echo '<script> alert("Please enter your registration number")</script>.<script>window.location="register-employee.php"</script>';
        }

        if (empty($first)) {
            echo '<script> alert("Please enter your first name")</script>.<script>window.location="register-employee.php"</script>';
         }

        if (empty($last)) {
            echo '<script> alert("Please enter your last name")</script>.<script>window.location="register-employee.php"</script>';
        }

        if (empty($phone)) {
            echo '<script> alert("Please enter your phone number")</script>.<script>window.location="register-employee.php"</script>';
        }

        if ($gender == "Null") {
            echo '<script> alert("Please select your gender ")</script>.<script>window.location="register-employee.php"</script>';
        }

        if (empty($address)) {
            echo '<script> alert("Please enter address")</script>.<script>window.location="register-employee.php"</script>';
        }

        $ingiza = "insert into employee values('".$regNo."','$first', '$last', '$gender', '$phone', '$address')";

        $hifadh = mysqli_query($con, $ingiza);

        if ($hifadh) {
            echo '<script> alert("Successufly employee saved")</script>.<script>window.location="./"</script>';
        } else {
            echo '<script> alert("Something wrong please try again")</script>.<script>window.location="register-employee.php"</script>';
        }



    } else {
        header("location:register-employee.php");
    }
?>