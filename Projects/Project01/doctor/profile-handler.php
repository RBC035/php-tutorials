<?php 
    require_once "../inc/connection.php" ;

    if (isset($_POST['changeDoctor']))
    {
        $last = $_POST['last'];
        $first = $_POST['first']; 
        $phone = $_POST['phone'];
        $date = $_POST['dob'];
        $address = $_POST['address'];
        $pid = $_SESSION['username'];

        $update = "update doctor set FirstName = '$first', LastName = '$last', DateOfBirth = '$date', Address = '$address', PhoneNumber = '$phone' where DoctorID = '$pid' ";
        $query = mysqli_query($con, $update);

        if($query)
        {
            echo '<script> alert("Successufly profile  changed")</script>.<script>window.location="my-account.php"</script>';
        }
        else 
        {
            echo '<script> alert("Something wrong please try again")</script>.<script>window.location="my-account.php"</script>'; 
        }

    }
    else 
    {
        header('location:index.php');
    }