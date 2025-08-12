<?php include "inc/header.php"; ?>

  <!-- ======= Sidebar ======= -->
    <?php include "inc/sidebar.php"; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <!-- <h1>Data Tables</h1> -->
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./" >Home</a></li>
          <li class="breadcrumb-item active">My dosage</li>
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
                    <h5 class="card-title">My dosage</h5>
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
                    <th>Problem name</th>
                    <th>Medicine name</th>
                    <th>Medicine type</th>
                    <th width="10%">Medicine image</th>
                    <th>Dosage</th>
                    <th>Dose</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    $no = 1;

                    $select = "select d.*, c.*, m.* from dosage d JOIN mycase c ON d.CaseID = c.CaseID JOIN medicine m ON d.MedicineID = m.MedicineID where PatientID = '".$_SESSION['username']."' order by DosageID desc  ";
                    $query = mysqli_query($con, $select);
                    while($row = mysqli_fetch_array($query)){
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo ucwords($row["caseName"]); ?></td>
                    <td><?php echo $row["Name"]; ?></td>
                    <td><?php echo $row["Type"]; ?></td>
                    <td><img src="../inc/medicine/<?php echo $row["image"]; ?>" alt="<?php echo $row["image"]; ?>" class="w-100 h-50"></td>
                    <td><?php echo $row["Dosage"]; ?></td>
                    <td><?php echo $row["Dose"]; ?></td>
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