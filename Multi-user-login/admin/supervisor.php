
<?php include "header.php"; ?>

           <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Manage supervisors</h4>
                    </div>
                    <div class="card-button">
                        <a href="add-employee.php?add=sup">Add supervisor</a>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Supervisor ID</th>
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
                            $select = "select * from employee where employeeID like 'super%' ";
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
                                <td class="edit"><a href="view-employee.php?id=<?php echo $row[0];  ?>&add=sup">Edit</a></td>
                                <td class="delete"><a onclick="return confirm('Are you sure want to delete this supervisor..?')" href="delete-employee.php?id=<?php echo $row[0]; ?>&st=sup">Delete</a></td>
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