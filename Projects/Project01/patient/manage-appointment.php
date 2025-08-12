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
      <div class="row mt-5">
        <div class="col-md-2"></div>
        <div class="col-md-8">

          <div class="card overflow-auto">
            <div class="card-body ">
              <div class="row">
                <div class="col-9">
                    <h5 class="card-title">Manage appointment</h5>
                </div>
                <div class="col-3 mt-3">
                    <a href="add-appointment.php" class="btn btn-outline-primary">Add appointment</a>
                </div>
              </div>

              <!-- Table with stripped rows -->
              <table class="table datatable table-hover table-stripped ">
                <thead>
                  <tr>
                    <th>
                      <b>S/N</b>
                    </th>
                    <th>Doctor name</th>
                    <th>Doctor phone number</th>
                    <th>No of appointment</th>
                    <th>More</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    $no = 1;
                    $select = "select d.*, a.*  from appointment a JOIN doctor d ON a.DoctorID = d.DoctorID where PatientID = '".$_SESSION['username']."' GROUP BY d.DoctorID, d.FirstName, d.LastName, d.PhoneNumber  order by a.DateTime desc ";
                    $query = mysqli_query($con, $select);
                    while($row = mysqli_fetch_array($query)){
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo ucwords($row["FirstName"]." ".$row["LastName"]); ?></td>
                    <td><?php echo $row["PhoneNumber"]; ?></td>
                    <td>
                       <span class="badge bg-primary p-2 "><?php  echo mysqli_num_rows(mysqli_query($con, "select * from appointment where DoctorID = '".$row["DoctorID"]."' && PatientID = '".$_SESSION['username']."' ")); ?></span>
                    </td>
                    <td class="text-center">
                          <a title="View appointment"  href="manage-appointment-list.php?id=<?php echo $row['DoctorID']; ?>&name=<?php echo ucwords($row["FirstName"]." ".$row["LastName"]); ?>" ><i class="bi bi-eye-fill text-success fs-4 "></i></a>
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