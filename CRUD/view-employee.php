<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update employee</title>
</head>
<body>
    <div>
        <?php
            require_once "connection.php";

            $employeeID = $_GET['v'];
 
            $vuta = "select * from employee  where employeeID = '$employeeID' ";
            $unganisha = mysqli_query($con, $vuta);

            $onesha = mysqli_fetch_assoc($unganisha);
        ?>
        <form action="update-employee.php" method="post">
            <input type="hidden" name="regNo"  value="<?php echo $onesha['employeeID']; ?>" > <br>
            <input type="text" name="first" value="<?php echo $onesha['firstName']; ?>"> <br>
            <input type="text" name="last" value="<?php echo $onesha['lastName']; ?>"> <br>
            <input type="tel" name="phone" value="<?php echo $onesha['phoneNumber']; ?>"> <br>
            <select name="gender">
                <option value="<?php echo $onesha['Gender']; ?>"><?php echo $onesha['Gender']; ?></option>
                <option value="F">Female</option>
                <option value="M">Male</option>
            </select><br>
            <input type="text" name="address" value="<?php echo $onesha['Address']; ?>"> <br>
            <input type="submit" name="update" value="Update employee">
        </form>
    </div>
   
</body>
</html>