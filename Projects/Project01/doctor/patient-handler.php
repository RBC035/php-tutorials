<?php
    require_once "../inc/connection.php" ;
   if (isset($_GET['cancelApp']))
   {
        $update = "update appointment set Status = 'Rejected' where AppointmentID = '".$_GET['cancelApp']."' ";
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
   else  if (isset($_GET['approve']))
   {
        $update = "update appointment set Status = 'Accepted' where AppointmentID = '".$_GET['approve']."' ";
        $query = mysqli_query($con, $update);

        if($query)
        {
            echo '<script> alert("Successufly appointment  accepted")</script>.<script>window.location="manage-appointment.php"</script>';
        }
        else 
        {
            echo '<script> alert("Something wrong please try again")</script>.<script>window.location="manage-appointment.php"</script>'; 
        }
   }
   else  if (isset($_POST['addCase']))
   {
        $name = $_POST['cName'];
        $desc = $_POST['description'];

        $insert =  "insert into  mycase (caseName, DoctorID, Date, case_description	)  values('$name','".$_SESSION['username']."', '".date('Y-m-d')."', '$desc')";
        $query = mysqli_query($con, $insert);

        if($query)
        {
            echo '<script> alert("Successufly case  registered")</script>.<script>window.location="manage-case.php"</script>';
        }
        else 
        {
            echo '<script> alert("Something wrong please try again")</script>.<script>window.location="register-case.php"</script>'; 
        }
   }
   else 
   {
        header('location:index.php');
   }
?>