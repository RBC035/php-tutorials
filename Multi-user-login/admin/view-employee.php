
<?php 
    include "header.php"; 

    $select = "select * from employee where employeeID = '".$_GET['id']."' ";
    $query = mysqli_query($con, $select);
    $data = mysqli_fetch_assoc($query);
?>

          <center>
            <div class="card-form">
                
                <h4>Change <?php echo $_GET['add'] == 'emp' ? 'Employee' : 'Supervisor'  ; ?></h4>
                <form action="update-employee.php" method="post">

                    <input type="text" name="firsname" value="<?php echo $data['firstName']; ?>" > <br>
                    <input type="text" name="lastname" value="<?php echo $data['lastName']; ?>"> <br>
                    <input type="hidden" name="status" value="<?php echo $_GET['add']; ?>">
                    <input type="hidden" name="reg" value="<?php echo $data['employeeID']; ?>">
                    <select name="gender" >
                        <option value="<?php echo $data['Gender']; ?>"><?php echo $data['Gender']; ?> </option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select> <br>
                    <input type="text" name="address"value="<?php echo $data['Address']; ?>"> <br>
                    <input type="tel" name="phonenumber" value="<?php echo $data['phoneNumber']; ?>"> <br>
                    <input type="submit" value="Change" name="updateEmployee">


                </form>
            </div>
          </center>
        </div>
    </div>
    
</body>
</html>