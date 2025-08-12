
<?php include "header.php"; ?>

           <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Manage employees</h4>
                    </div>
                    <div class="card-button">
                        <a href="add-employee.php?add=emp">Add employee</a>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Emloyee ID</th>
                            <th>First name</th>
                            <th>last name</th>
                            <th>gender</th>
                            <th>phone number</th>
                            <th>Address</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                            $no = 1;
                            $select = "select * from employee where employeeID like 'emp%' ";
                            $query = mysqli_query($con, $select);
                            while($row = mysqli_fetch_array($query)){
                        ?>
                             <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row[0]; ?></td>
                                <td><?php echo $row[1]; ?></td>
                                <td><?php echo $row[2]; ?></td>
                                <td><?php echo $row[3]; ?></td>
                                <td><?php echo $row[4]; ?></td>
                                <td><?php echo $row[5]; ?></td>
                                <td class="edit"><a href="view-employee.php?id=<?php echo $row[0];  ?>&add=emp">Edit</a></td>
                                <td class="delete"><a onclick="return confirm('Are you sure want to delete this supervisor..?')" href="delete-employee.php?id=<?php echo $row[0]; ?>&st=emp">Delete</a></td>
                            </tr>
                        <?php
                                $no += 1;
                            }
                        ?>
                       

                    </tbody>
                </table>
           </div>
        </div>
    </div>
    
</body>
</html>