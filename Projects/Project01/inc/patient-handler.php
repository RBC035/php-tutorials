<?php 
    require_once "connection.php" ; 

   if (isset($_POST['addPatient'])) {
  
    $last = $_POST['last'];
    $first = $_POST['first']; 
    $phone = $_POST['phone'];
    $date = $_POST['date'];
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
          $insert =  "insert into  patient values('$patientID','$first', '$last', '$date', '$address','$phone', 'Enable')";
          $query = mysqli_query($con, $insert);

          if ($query) 
          {
               $num = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);

               $password = password_hash($num, PASSWORD_DEFAULT);
               mysqli_query($con, "insert into userlogin values('$patientID','$password','PATIENT') ");

               echo '<script> alert("You are successufly registered your USERNAME is  '.$patientID.'  and your PASSWORD is  '.$num.'  ")</script>.<script>window.location="../"</script>';
          }
          else 
          {

          echo '<script> alert("Something wrong please try again")</script>.<script>window.location="register.php"</script>';

          }
     }
     else 
     {
          echo '<script> alert("Username is used please try again")</script>.<script>window.location="register.php"</script>';

     }




   } else {
        header('location:register.php');
   }
?>