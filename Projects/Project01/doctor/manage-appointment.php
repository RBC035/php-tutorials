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
                    <th>Patient name</th>
                    <th>Patient phone number</th>
                    <th>Numbers</th>
                    <th>View</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    $no = 1;
                    $select = "select p.*, a.*  from appointment a JOIN patient p ON a.PatientID = p.PatientID where DoctorID = '".$_SESSION['username']."' GROUP BY p.PatientID, p.FirstName, p.LastName, p.PhoneNumber order by a.DateTime desc ";
                    $query = mysqli_query($con, $select);
                    while($row = mysqli_fetch_array($query)){
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo ucwords($row["FirstName"]." ".$row["LastName"]); ?></td>
                    <td><?php echo $row["PhoneNumber"]; ?></td>
                    <td >         
                         <span class="badge bg-primary p-2 "><?php  echo mysqli_num_rows(mysqli_query($con, "select * from appointment where PatientID = '".$row["PatientID"]."' && DoctorID = '".$_SESSION['username']."' ")); ?></span>
                    </td>
                    <td class="text-center">
                          <a title="View appointment"  href="manage-appointment-list.php?id=<?php echo $row['PatientID']; ?>&name=<?php echo ucwords($row["FirstName"]." ".$row["LastName"]); ?>" ><i class="bi bi-eye-fill text-success fs-4 "></i></a>
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