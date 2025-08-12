<?php 
     require_once '../../CRUD/connection.php'; 
     if (isset($_POST['updateEmployee']) && $_POST['updateEmployee'] == "Change") 
     {
        $status = $_POST['status'];
        $regno = $_POST['reg'];
        $last = $_POST['lastname'];
        $first = $_POST['firsname']; 
        $phone = $_POST['phonenumber'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];

        $update = "update employee set firstName = '$first', lastName = '$last', Gender = '$gender', Address = '$address', phoneNumber = '$phone' where employeeID = '$regno' ";
        $query = mysqli_query($con, $update);

        if($status == "emp")
        {
            echo '<script> alert("Successufly employee changed")</script>.<script>window.location="employee.php"</script>';

        }
        else 
        {
            echo '<script> alert("Successufly supervisor changed")</script>.<script>window.location="supervisor.php"</script>';
            
        }
     } 
     else 
     {
        echo "eror";
     }

?>