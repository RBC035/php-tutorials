<?php 
    require_once "../inc/connection.php" ;

    if (isset($_POST['addPatient']))
    {
        $last = $_POST['last'];
        $first = $_POST['first']; 
        $phone = $_POST['phone'];
        $date = $_POST['dob'];
        $address = $_POST['address'];
    
        $first01 = $first[0];
        $second01 = $first[1];
        $first02 = $last[0];
        $second02 = $last[1];
    
        $numbers = "12341234567890123455678901234561234123456789785678901234567890";
        $sub =  substr(str_shuffle($numbers), 0,6);
    
        $patientID = strtoupper($first01.$second01.$first02.$second02).$sub;

        $select = "select * from patient where PatientID = '$patientID' ";
        $check = mysqli_query($con, $select);

        if (!mysqli_num_rows($check) > 0) 
        {
             $insert =  "insert into  patient values('$patientID','$first', '$last', '$date', '$address','$phone','Enable')";
             $query = mysqli_query($con, $insert);
   
             if ($query) 
             {
                  $num = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
   
                  $password = password_hash($num, PASSWORD_DEFAULT);
                  mysqli_query($con, "insert into userlogin values('$patientID','$password','PATIENT') ");
   
                 header("location:manage-patient.php");
             }
             else 
             {
   
             echo '<script> alert("Something wrong please try again")</script>.<script>window.location="manage-patient.php"</script>';
   
             }
        }
        else 
        {
             echo '<script> alert("Username is used please try again")</script>.<script>window.location="manage-patient.php"</script>';
   
        }
    }
    else if (isset($_POST['updatePatient']))
    {
        $last = $_POST['last'];
        $first = $_POST['first']; 
        $phone = $_POST['phone'];
        $date = $_POST['dob'];
        $address = $_POST['address'];
        $pid = $_POST['id'];

        $update = "update patient set FirstName = '$first', LastName = '$last', DateOfBirth = '$date', Address = '$address', PhoneNumber = '$phone' where PatientID = '$pid' ";
        $query = mysqli_query($con, $update);

        if($query)
        {
            echo '<script> alert("Successufly  changed")</script>.<script>window.location="manage-patient.php"</script>';
        }
        else 
        {
            echo '<script> alert("Something wrong please try again")</script>.<script>window.location="manage-patient.php"</script>'; 
        }

    }

    else if (isset($_POST['updatePassword']))
    {
       $new = $_POST['password'];
       $user = $_POST['id'];

       $password = password_hash($new, PASSWORD_DEFAULT);

       $update = "update  userlogin set Password = '$password' where UserName = '$user' ";
       $query = mysqli_query($con, $update);

       if($query)
       {
           echo '<script> alert("Successufly  changed")</script>.<script>window.location="manage-patient.php"</script>';
       }
       else 
       {
           echo '<script> alert("Something wrong please try again")</script>.<script>window.location="manage-patient.php"</script>'; 
       }
    }

    else if (isset($_GET['en']))
    {
        $patientID = $_GET['en'];
        $select = "select status from patient where PatientID = '$patientID' ";
        $check = mysqli_query($con, $select);
        $row = mysqli_fetch_assoc($check);
        if($row['status'] == 'Enable')
        {
            $update = "update  patient set status = 'Disable' where PatientID = '$patientID' ";
            $query = mysqli_query($con, $update);
            if ($query) 
            {
                // echo '<script> alert("Successufly  changed")</script>.<script>window.location="manage-patient.php"</script>';
                header("location:manage-patient.php");
            }
            else 
            {
                echo '<script> alert("Something wrong please try again")</script>.<script>window.location="manage-patient.php"</script>'; 
            }
        }
        else 
        {
            $update = "update  patient set status = 'Enable' where PatientID = '$patientID' ";
            $query = mysqli_query($con, $update);
            if ($query) 
            {
                // echo '<script> alert("Successufly  changed")</script>.<script>window.location="manage-patient.php"</script>';
                header("location:manage-patient.php");
            }
            else 
            {
                echo '<script> alert("Something wrong please try again")</script>.<script>window.location="manage-patient.php"</script>'; 
            }
        }

    }
    
    else 
    {
        header('location:manage-patient.php');
    }
    
?>