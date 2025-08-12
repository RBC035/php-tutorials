<?php require_once'../../CRUD/connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $username=$_SESSION['username'];
        $select = "select * from employee where employeeID= '$username'";
        $query = mysqli_query($con,$select);
        $row = mysqli_fetch_array($query);



    ?>
    <h1>welcome  <?php echo $_SESSION['privillage'] ?> <h1>
        <form action="" method="post"> 
            <input type="text" name="firstname" value="<?php echo $row['firstName']; ?>">           
            <input type="text" name="lastname" value=" <?php echo $row['lastName']; ?>">
             <input type="text" name="Gender" value="<?php echo $row['Gender']; ?>">
              <input type="text" name="phoneNumber" value=" <?php echo $row['phoneNumber']; ?>">
              <input type="text"name="Address" value="<?php echo $row['Address']; ?>">
        </form>
       

    </body>
</html>