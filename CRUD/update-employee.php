<?php 
    ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

    require_once "connection.php";

    if (isset($_POST['update'])  && $_POST['update'] == "Update employee") {

        $regNo = $_POST['regNo'];
        $last = $_POST['last'];
        $first = $_POST['first']; 
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];

        $badilisha = "update employee set  phoneNumber = '$phone', Gender = '$gender', Address = '$address',  firstName = '$first', lastName = '$last'  where employeeID = '$regNo' ";

        $unganisha = mysqli_query($con, $badilisha);

        if(!$unganisha){
            echo '<script> alert("Something wrong please try again")</script>.<script>window.location="./"</script>';

        } else {
            echo '<script> alert("Successufly employee changed")</script>.<script>window.location="./"</script>';

        }

    } else {
        header("location:./");
    }
?>