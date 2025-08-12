<?php 
     require_once '../../CRUD/connection.php'; 

        $delete = "delete from employee where employeeID = '".$_GET['id']."'";
        $query = mysqli_query($con, $delete);

        if ($query) 
        {
            $userlogin = "delete from userlogin where username = '".$_GET['id']."'";
            $query2 = mysqli_query($con, $userlogin);

            if($_GET['st'] == 'sup')
            {
                echo '<script> alert("Successufly supervisor deleted")</script>.<script>window.location="supervisor.php"</script>';
            }
            else 
            {
                echo '<script> alert("Successufly employee deleted")</script>.<script>window.location="employee.php"</script>';

            }

        } 

        else 
        {
            echo '<script> alert("Something wrong")</script>.<script>window.location="index.php"</script>';
        }
?>