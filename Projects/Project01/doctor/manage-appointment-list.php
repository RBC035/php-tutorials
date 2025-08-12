<?php include "inc/header.php"; ?>

  <!-- ======= Sidebar ======= -->
    <?php include "inc/sidebar.php"; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <!-- <h1>Data Tables</h1> -->
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./" >Home</a></li>
          <li class="breadcrumb-item"><a href="manage-appointment.php" >Manage appointment</a></li>
          <li class="breadcrumb-item active">Appointment list</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6">

          <div class="card overflow-auto">
            <div class="card-body ">
              <div class="row">
                <div class="col-10">
                    <h5 class="card-title"><?php echo $_GET['name']; ?>'s appointment lists</h5>
                </div>
              </div>

              <!-- Table with stripped rows -->
              <table class="table datatable table-hover table-stripped ">
                <thead>
                  <tr>
                    <th>
                      <b>S/N</b>
                    </th>
                    <th data-type="date" data-format="YYYY/DD/MM">Appointment date</th>
                    <th>Status</th>
                    <th>Approve</th>
                    <th>Cancel</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    $no = 1;
                    $select = "select * from appointment where DoctorID = '".$_SESSION['username']."' && PatientID = '".$_GET["id"]."' order by DateTime desc ";
                    $query = mysqli_query($con, $select);
                    while($row = mysqli_fetch_array($query)){
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>

                    <td><?php echo $row["DateTime"]; ?></td>
                    <td>
                        <?php 
                            if ($row["Status"] == 'Pending') 
                            {
                       ?>
                            <span class="badge bg-warning p-2">Pending</span>
                       <?php
                            }
                            else if ($row["Status"] == 'Accepted') 
                            {
                        ?>
                             <span class="badge bg-success p-2">Accepted</span>
                        <?php
                            }
                            else if ($row["Status"] == 'Rejected') 
                            {
                        ?>
                                <span class="badge bg-danger p-2">Rejected</span>
                        <?php
                            }
                            else 
                            {
                        ?>
                                <span class="badge bg-danger p-2">Cancelled</span>
                        <?php
                            }

                        ?>
                    </td>
                    <td class="text-center ">
                      <?php
                          if ($row["Status"] == 'Cancelled') 
                          {
                      ?>
                            <a title="No action"  href="#" ><i class="bi bi-check-circle-fill text-black fs-4 "></i></a>
                      <?php
                          }
                          else
                          {
                      ?>

                          <a title="Re cancel appointment"  href="patient-handler.php?approve=<?php echo $row['AppointmentID']; ?>" ><i class="bi bi-check-circle-fill text-primary fs-4 "></i></a>

                      <?php
                            
                          }
                      ?>
                    </td>
                    <td class="text-center ">
                    <?php
                          if ($row["Status"] == 'Cancelled') 
                          {
                      ?>
                             <a title="No action" href="#" ><i class="bi bi-x-square-fill text-secondary fs-4 "></i></a>
                      <?php
                          }
                          else
                          {
                      ?>
                          <a title="Cancel appointment" onclick="return confirm('Are you sure want to cancel this appointment..?')" href="patient-handler.php?cancelApp=<?php echo $row['AppointmentID']; ?>" ><i class="bi bi-x-square-fill text-danger fs-4 "></i></a>

                      <?php
                            
                          }
                      ?>
                    </td>
                  </tr>
                <?php
                    $no += 1;
                  }
                ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include "inc/footer.php"; ?>