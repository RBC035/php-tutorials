<?php include "inc/header.php"; ?>

  <!-- ======= Sidebar ======= -->
    <?php include "inc/sidebar.php"; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <!-- <h1>Data Tables</h1> -->
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./" >Home</a></li>
          <li class="breadcrumb-item active">Manage patient</li>
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
                    <h5 class="card-title">Manage patient</h5>
                </div>
                <!-- <div class="col-2 mt-3">
                    <a href="register-patient.php" class="btn btn-outline-primary">Add patient</a>
                </div> -->
              </div>

              <!-- Table with stripped rows -->
              <table class="table datatable table-hover table-stripped ">
                <thead>
                  <tr>
                    <th>
                      <b>S/N</b>
                    </th>
                    <th>Full name</th>
                    <th data-type="date" data-format="YYYY/DD/MM">DOB</th>
                    <th>Phone number</th>
                    <th>Address</th>
                    <!-- <th>View</th> -->
                  </tr>
                </thead>
                <tbody>
                <?php 
                    $no = 1;
                    $select = "select * from patient where status = 'Enable'  ";
                    $query = mysqli_query($con, $select);
                    while($row = mysqli_fetch_array($query)){
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo ucwords($row["FirstName"]." ".$row["LastName"]); ?></td>
                    <td><?php echo $row["DateOfBirth"]; ?></td>
                    <td><?php echo $row["PhoneNumber"]; ?></td>
                    <td><?php echo $row["Address"]; ?></td>
                    <!-- <td class="text-center"><a title="View patient" href="patient-edit.php?id=<?php echo $row['PatientID']; ?>" ><i class="bi bi-eye-fill text-success "></i></a> </td> -->
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