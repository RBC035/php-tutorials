<?php include "inc/header.php"; ?>

  <!-- ======= Sidebar ======= -->
    <?php include "inc/sidebar.php"; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <!-- <h1>Data Tables</h1> -->
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./" >Home</a></li>
          <li class="breadcrumb-item active">Manage medicine</li>
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
                    <h5 class="card-title">Manage medicine</h5>
                </div>
                <div class="col-2 mt-3">
                    <a href="register-medicine.php" class="btn btn-outline-primary">Add medicine</a>
                </div>
              </div>

              <!-- Table with stripped rows -->
              <table class="table datatable table-hover table-stripped ">
                <thead>
                  <tr>
                    <th>
                      <b>S/N</b>
                    </th>
                    <th>MedicineName</th>
                    <th>MedicineType</th>
                    <th data-type="date" data-format="YYYY/DD/MM">ManufacturedDate</th>
                    <th>ExpiredDate</th>
                    <th>Status</th>
                    <th width="10%">Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    $no = 1;
                    $select = "select * from medicine  ";
                    $query = mysqli_query($con, $select);
                    while($row = mysqli_fetch_array($query)){
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo ucwords($row["Name"]); ?></td>
                    <td><?php echo $row["Type"]; ?></td>
                    <td><?php echo $row["ManufacturedDate"]; ?></td>
                    <td><?php echo $row["ExpiredDate"]; ?></td>
                    <td>
                      <?php 
                         $today =date('Y-m-d');
                          if ($row["ExpiredDate"] <= $today) 
                          {
                      ?>
                          <span class="badge bg-danger p-2">Expired</span>
                      <?php
                          }
                          else 
                          {
                      ?>
                         <span class="badge bg-success p-2">NotExpired</span>
                      <?php
                          }
                       ?>
                    </td>
                    <td><img src="../inc/medicine/<?php echo $row["image"]; ?>" alt="<?php echo $row["image"]; ?>" class="w-100 h-50"></td>
                    <td class="text-center"><a title="View medicine" href="medicine-edit.php?id=<?php echo $row['MedicineID']; ?>" ><i class="bi bi-eye-fill text-success "></i></a> </td>
                    <td class="text-center"><a title="Delete medicine" href="medicine-edit.php?id=<?php echo $row['MedicineID']; ?>" ><i class="bi bi-trash-fill text-danger "></i></a> </td>

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