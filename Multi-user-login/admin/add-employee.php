
<?php include "header.php"; ?>

          <center>
            <div class="card-form">
                
                <h4><?php echo $_GET['add'] == 'emp' ? 'Employee' : 'Supervisor'  ; ?> registration form</h4>
                <!-- <form action="employee-handler.php" method="post"></form> -->
                <form action="employee-handler.php" method="post">
                    <input required type="text" name="firsname" placeholder="Enter first name"> <br>
                    <input type="text" name="lastname" required placeholder="Enter last name"> <br>
                    <input type="hidden" name="status" value="<?php echo $_GET['add']; ?>"> <br>
                    <select name="gender" required >
                        <option value="null">Select gender </option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select> <br>
                    <input type="text" name="address" required placeholder="Enter address"> <br>
                    <input type="tel" name="phonenumber" required placeholder="Enter phonenumber"> <br>
                    <input type="submit" value="Register" name="addEmployee">


                </form>
            </div>
          </center>
        </div>
    </div>
    
</body>
</html>