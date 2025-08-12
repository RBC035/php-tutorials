<?php include "inc/header.php"; ?>

  <!-- ======= Sidebar ======= -->
    <?php include "inc/sidebar.php"; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <!-- <h1>Data Tables</h1> -->
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./" >Home</a></li>
          <li class="breadcrumb-item active">Manage case</li>
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
                    <h5 class="card-title">Manage case</h5>
                </div>
                
              </div>

              <!-- Table with stripped rows -->
              <table class="table datatable table-hover table-stripped ">
                <thead>
                  <tr>
                    <th>
                      <b>S/N</b>
                    </th>
                    <th>Case name</th>
                    <th>DoctorID</th>
                    <th>Doctor name</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Date</th>
                    <th>Case description</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    $no = 1;
                    $select = "select c.*, d.* from mycase c JOIN doctor d ON c.DoctorID = d.DoctorID order by Date desc  ";
                    $query = mysqli_query($con, $select);
                    while($row = mysqli_fetch_array($query)){
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo ucfirst($row["caseName"]); ?></td>
                    <td><?php echo $row["DoctorID"]; ?></td>
                    <td><?php echo ucwords($row["FirstName"]." ".$row["LastName"]); ?></td>
                    <td><?php echo $row["Date"]; ?></td>
                    <td><?php echo $row["case_description"]; ?></td>
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