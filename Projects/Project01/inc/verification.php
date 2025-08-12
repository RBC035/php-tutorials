<?php
    require_once "connection.php" ;

    $id = $_SESSION['username'];

    if ($_SESSION['privillage'] == "DOCTOR") 
    {
        $select = "select status from doctor where DoctorID = '$id'  ";
        $query = mysqli_query($con, $select);
        $row = mysqli_fetch_array($query);
        if ($row['status'] != 'Enable') 
        {
            echo "<script> alert('Your account was expired  please contact administrator for help... '); </script> .<script>window.location='../'</script>";
        }
        else 
        {
             header("location:../doctor/");
        }
       
    }
    else 
    {
        $select = "select status from patient where PatientID  = '$id'  ";
        $query = mysqli_query($con, $select);
        $row = mysqli_fetch_array($query);
        if ($row['status'] != 'Enable') 
        {
            echo "<script> alert('Your account was expired  please contact administrator for help... '); </script> .<script>window.location='../'</script>";
        }
        else 
        {
             header("location:../patient/");
        }
    }
?>