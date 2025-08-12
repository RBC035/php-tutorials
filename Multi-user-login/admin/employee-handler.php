<?php 
     require_once '../../CRUD/connection.php'; 
     include_once "id-generator.php";

     if (isset($_POST['addEmployee']) && $_POST['addEmployee'] == "Register") 
     {
        $status = $_POST['status'];
        $last = $_POST['lastname'];
        $first = $_POST['firsname']; 
        $phone = $_POST['phonenumber'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
 
        if ( $status == "emp") 
        {

            $employeeID = getId($con, "employee");
 
            $insert =  "insert into employee values('".$employeeID."','$first', '$last', '$gender', '$phone', '$address')";
 
            $join = mysqli_query($con, $insert);
 
            if ($join) 
            {
                $userlogin = "insert into userlogin values ('$employeeID', '1234', 'Employee')";
                $unganisha = mysqli_query($con, $userlogin);
 
                echo '<script> alert("Successufly employee saved")</script>.<script>window.location="employee.php"</script>';
             } 
             else
             {
                 echo '<script> alert("Something wrong please try again")</script>.<script>window.location="add-employee.php?add=$status"</script>';
             }
        } 
        else 
        {

            $supervisorId =  getId($con, "supervisor");

           $insert =  "insert into employee values('".$supervisorId ."','$first', '$last', '$gender', '$phone', '$address')";


           $join = mysqli_query($con, $insert);


           if ($join) 
           {
               $userlogin = "insert into userlogin values ('$supervisorId ', '1234', 'Supervisor')";
               $unganisha = mysqli_query($con, $userlogin);

               echo '<script> alert("Successufly supervisor saved")</script>.<script>window.location="supervisor.php"</script>';
            } 
            else
            {
                echo '<script> alert("Something wrong please try again")</script>.<script>window.location="add-employee.php?add=$status"</script>';
            }

        }


     } 
     else 
     {
        echo "select thebest path first";
     }
    
?>