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
                <div class="col-2 mt-3">
                    <a href="register-case.php" class="btn btn-outline-primary">Add case</a>
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
                    <th data-type="date" data-format="YYYY/DD/MM">Date</th>
                    <th>Case description</th>
                    <th>View</th>
                    <th>Delete</th>
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
                    <td><?php echo ucfirst( $row["caseName"]); ?></td>
                    <td><?php echo $row["Date"]; ?></td>
                    <td><?php echo $row["case_description"]; ?></td>
                    <td class="text-center"><a title="View case" href="#?id=<?php echo $row['CaseID']; ?>" ><i class="bi bi-eye-fill text-success "></i></a> </td>

                    <td class="text-center"><a title="Delete case" href="#?id=<?php echo $row['CaseID']; ?>" ><i class="bi bi-trash-fill text-danger "></i></a> </td>

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