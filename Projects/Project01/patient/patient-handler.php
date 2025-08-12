<?php 
    require_once "../inc/connection.php" ;

    if (isset($_POST['changePatient']))
    {
        $last = $_POST['last'];
        $first = $_POST['first']; 
        $phone = $_POST['phone'];
        $date = $_POST['dob'];
        $address = $_POST['address'];
        $pid = $_SESSION['username'];

        $update = "update patient set FirstName = '$first', LastName = '$last', DateOfBirth = '$date', Address = '$address', PhoneNumber = '$phone' where PatientID = '$pid' ";
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
    else if (isset($_POST['addAppointment']))
    {
        $date = $_POST['date'];
        $name = $_POST['doctor']; 

        $insert = "insert into  appointment (PatientID, DoctorID, DateTime) values ('".$_SESSION['username']."', '$name', '$date') ";
        $query = mysqli_query($con, $insert);

        if ($query)
        {
            echo "<script> alert('Your appointment has been sent Please wait for respond  '); </script> .<script>window.location='manage-appointment.php'</script>";
        }
        else 
        {
            echo "<script> alert('Something wrong please try again '); </script> .<script>window.location='add-appointment.php'</script>";
        }
    }
    else if (isset($_GET['cancelApp'])) 
    {
        $update = "update appointment set Status = 'Cancelled' where AppointmentID = '".$_GET['cancelApp']."' ";
        $query = mysqli_query($con, $update);

        if($query)
        {
            echo '<script> alert("Successufly appointment  cancelled")</script>.<script>window.location="manage-appointment.php"</script>';
        }
        else 
        {
            echo '<script> alert("Something wrong please try again")</script>.<script>window.location="manage-appointment.php"</script>'; 
        }
    }

    else if (isset($_POST['changeAppointment']))
    {
        $date = $_POST['date'];
        $name = $_POST['doctor']; 
        $apid = $_POST['id']; 

        $update = "update appointment set Status = 'Pending', DoctorID = '$name' , DateTime = ' $date' where AppointmentID = '  $apid' ";
        $query = mysqli_query($con, $update);

        if($query)
        {
            echo '<script> alert("Successufly appointment  changed")</script>.<script>window.location="manage-appointment.php"</script>';
        }
        else 
        {
            echo '<script> alert("Something wrong please try again")</script>.<script>window.location="manage-appointment.php"</script>'; 
        }
    }

    else if (isset($_POST['changeAccount']))
    {
        $last = $_POST['last'];
        $first = $_POST['first']; 
        $phone = $_POST['phone'];
        $date = $_POST['dob'];
        $address = $_POST['address'];
        $pid = $_SESSION['username'];

        $update = "update patient set FirstName = '$first', LastName = '$last', DateOfBirth = '$date', Address = '$address', PhoneNumber = '$phone' where PatientID = '$pid' ";
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