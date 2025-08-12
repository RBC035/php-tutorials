<?php 
    require_once "../inc/connection.php" ;

    if (isset($_POST['addDoctor']))
    {
        $last = $_POST['last'];
        $first = $_POST['first']; 
        $phone = $_POST['phone'];
        $date = $_POST['dob'];
        $address = $_POST['address'];
    
        $first01 = $first[0];
        $second01 = $first[1];
        $first02 = $last[0];

        $numbers = "12341234567890123455678901234561234123456789785678901234567890";
        $sub =  substr(str_shuffle($numbers), 0,7);
        $doctorID = strtoupper($first01.$second01.$first02).$sub;

        $select = "select * from doctor where DoctorID = '$doctorID' ";
        $check = mysqli_query($con, $select);

        if (!mysqli_num_rows($check) > 0) 
        {
             $insert =  "insert into  doctor values('$doctorID','$first', '$last', '$address','$date','$phone', 'Enable')";
             $query = mysqli_query($con, $insert);
   
             if ($query) 
             {
                  $num = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
   
                  $password = password_hash($num, PASSWORD_DEFAULT);
                  mysqli_query($con, "insert into userlogin values('$doctorID','$password','DOCTOR') ");
   
                 header("location:manage-doctor.php");
             }
             else 
             {
   
             echo '<script> alert("Something wrong please try again")</script>.<script>window.location="manage-doctor.php"</script>';
   
             }
        }
        else 
        {
             echo '<script> alert("Username is used please try again")</script>.<script>window.location="manage-doctor.php"</script>';
   
        }
    }

    else  if (isset($_POST['updateDoctor']))
    {
        $last = $_POST['last'];
        $first = $_POST['first']; 
        $phone = $_POST['phone'];
        $date = $_POST['dob'];
        $address = $_POST['address'];
        $pid = $_POST['id'];

        $update = "update doctor set FirstName = '$first', LastName = '$last', DateOfBirth = '$date', Address = '$address', PhoneNumber = '$phone' where DoctorID = '$pid' ";
        $query = mysqli_query($con, $update);

        if($query)
        {
            echo '<script> alert("Successufly  changed")</script>.<script>window.location="manage-doctor.php"</script>';
        }
        else 
        {
            echo '<script> alert("Something wrong please try again")</script>.<script>window.location="manage-doctor.php"</script>'; 
        }

    }

    else  if (isset($_POST['updatePassword']))
    {
        $new = $_POST['password'];
        $user = $_POST['id'];
 
        $password = password_hash($new, PASSWORD_DEFAULT);
 
        $update = "update  userlogin set Password = '$password' where UserName = '$user' ";
        $query = mysqli_query($con, $update);
 
        if($query)
        {
            echo '<script> alert("Successufly  changed")</script>.<script>window.location="manage-doctor.php"</script>';
        }
        else 
        {
            echo '<script> alert("Something wrong please try again")</script>.<script>window.location="manage-doctor.php"</script>'; 
        }
    }

    else if (isset($_GET['en']))
    {
        $doctorID = $_GET['en'];
        $select = "select status from doctor where DoctorID = '$doctorID' ";
        $check = mysqli_query($con, $select);
        $row = mysqli_fetch_assoc($check);
        if($row['status'] == 'Enable')
        {
            $update = "update  doctor set status = 'Disable' where DoctorID = '$doctorID' ";
            $query = mysqli_query($con, $update);
            if ($query) 
            {
                header("location:manage-doctor.php");
            }
            else 
            {
                echo '<script> alert("Something wrong please try again")</script>.<script>window.location="manage-doctor.php"</script>'; 
            }
        }
        else 
        {
            $update = "update  doctor set status = 'Enable' where DoctorID = '$doctorID' ";
            $query = mysqli_query($con, $update);
            if ($query) 
            {
                header("location:manage-doctor.php");
            }
            else 
            {
                echo '<script> alert("Something wrong please try again")</script>.<script>window.location="manage-doctor.php"</script>'; 
            }
        }

    }


    else 
    {
        header('location:manage-doctor.php');
    }
    
?>