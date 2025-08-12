<?php include "inc/header.php"; ?>

  <!-- ======= Sidebar ======= -->
    <?php include "inc/sidebar.php"; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <!-- <h1>Data Tables</h1> -->
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./" >Home</a></li>
          <li class="breadcrumb-item active">Manage appointment</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card overflow-auto">
            <div class="card-body ">
              <div class="row">
                <div class="col-10">
                    <h5 class="card-title">Manage appointment</h5>
                </div>
              </div>

              <!-- Table with stripped rows -->
              <table class="table datatable table-hover table-stripped ">
                <thead>
                  <tr>
                    <th>
                      <b>S/N</b>
                    </th>
                    <th>PatientID</th>
                    <th>Patient name</th>
                    <th>DoctorID</th>
                    <th>Doctor name</th>
                    <th>Date</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    $no = 1;
                    $select = "select  a.* , p.*, d.FirstName as first, d.LastName as last from appointment a JOIN patient p ON a.PatientID = p.PatientID JOIN doctor d ON d.DoctorID = a.DoctorID order by a.DateTime desc ";
                    $query = mysqli_query($con, $select);
                    while($row = mysqli_fetch_array($query)){
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row["PatientID"]; ?></td>
                    <td><?php echo ucwords($row["FirstName"]." ".$row["LastName"]); ?></td>
                    <td><?php echo $row["DoctorID"]; ?></td>
                    <td><?php echo ucwords($row["first"]." ".$row["last"]); ?></td>

                    <td >   <?php echo $row["DateTime"]; ?>  </td>
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
                                <span class="badge bg-secondary p-2">Cancelled</span>
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