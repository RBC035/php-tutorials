<?php 

    require_once "../CRUD/connection.php";

    if (isset($_POST['login']) && $_POST['login'] =="Login") {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $table = "select * from userlogin where username = '$username' ";

        $query = mysqli_query($con, $table);

        if (mysqli_num_rows($query) > 0) {


            $data = mysqli_fetch_array($query);

            $databasePassword = $data['password'];

            if ($databasePassword == $password) {

                    $databaseRole = $data['role'];

                $_SESSION['username'] =  $username;

                $_SESSION['privillage'] = $databaseRole;

                if ($_SESSION['privillage'] == "ADMIN") 
                {
                        // echo "welcome adimn";
                        header("location:admin/index.php");
                } 

                else if($_SESSION['privillage'] == "Employee")
                {
                        // echo "welcome Employee";
                        header("location:employee/index.php");

                }

                    else if ($_SESSION['privillage'] == "Supervisor") 
                {
                            // echo "welcome Supervisor";
                        header("location:supervisor/index.php");

                }

                else 
                {
                    echo "unknown user ";
                }


            } else {

                // echo "is not exits"; 
                echo "<script> alert('Password  is not exits '); </script> .<script>window.location='index.php'</script>";


            }

            

        } else {
            echo "<script> alert('Username is not exits '); </script> .<script>window.location='index.php'</script>";

            // echo "";

        }


    } else {

        header("location:index.php");

    }

?>