<?php 
    require_once "connection.php" ; 

   if (isset($_POST['sigin'])) {

    $username = $_POST['username'];
    $password = $_POST['password']; 

    $table = "select * from userlogin where UserName = '$username' ";
    $query = mysqli_query($con, $table);

    if (mysqli_num_rows($query) > 0) {


        $data = mysqli_fetch_array($query);

        $databasePassword = $data['Password'];

        if (password_verify($password, $databasePassword)) {

            $databaseRole = $data['Role'];
            $_SESSION['username'] =  $username;     
            $_SESSION['privillage'] = $databaseRole;

            if ($_SESSION['privillage'] == "ADMIN") 
            {
                    header("location:../admin/index.php");
            } 
            if ($_SESSION['privillage'] == "DOCTOR" || $_SESSION['privillage'] == "PATIENT") 
            {
                    header("location:verification.php");
            } 
            else 
            {
                echo "<script> alert('Unknown user please try again '); </script> .<script>window.location='../'</script>";
            }
        }
        else
        {
            echo "<script> alert('Password  is not exits '); </script> .<script>window.location='../'</script>";

        }

    }
    else 
    {
        echo "<script> alert('Username is not exits '); </script> .<script>window.location='../'</script>";

    }


   } 
   else 
   {
         header("location:../");
   }