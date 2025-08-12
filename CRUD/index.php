
<?php 

    require_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee list</title>
</head>
<body>
    <h4>Employee list </h4>
    <div>
        <a href="register-employee.php">Add employee</a>
    </div>
    <div>
        <table>
            <tr>
                <th>S/N</th>
                <th>Employee ID</th>
                <th>Full name</th>
                <th>Phone number</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <?php 
                $no = 1;

                $vuta = "select * from employee";

                $unganisha = mysqli_query($con, $vuta);

                while($onesha = mysqli_fetch_array($unganisha)){
          ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $onesha['employeeID']; ?></td>
                    <td><?php echo $onesha['firstName']." ".$onesha['lastName']; ?></td>
                    <td><?php echo $onesha['phoneNumber']; ?></td>
                    <td><?php echo $onesha['Address']; ?></td>
                    <td><?php echo $onesha['Gender']; ?></td>
                    <td>
                        <!-- <form action="view-employee.php" method="post">
                            <input type="hidden" name="emID" value="<?php echo $onesha['employeeID']; ?>"> <br>
                            <input type="submit" value="Update">
                        </form> -->
                        <a href="view-employee.php?v=<?php echo $onesha['employeeID']; ?>">Update</a>
                    </td>
                    <td>
                        <a href="delete-employee.php?d=<?php echo $onesha['employeeID']; ?>">Delete</a>
                    </td>
                </tr>
          <?php
                $no +=1;
                }
            ?>

        </table>
    </div>

    <div>
        <a href="../Basics/">Back home.</a>
    </div>
    
</body>
</html>