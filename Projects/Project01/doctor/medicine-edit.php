<?php include "inc/header.php"; ?>

  <!-- ======= Sidebar ======= -->
    <?php 
        include "inc/sidebar.php"; 

        $id = $_GET['id'];
        $select = "select * from medicine  where MedicineID = '$id' ";
        $query = mysqli_query($con, $select);
        $row = mysqli_fetch_array($query);
    ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <!-- <h1>Data Tables</h1> -->
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./" >Home</a></li>
          <li class="breadcrumb-item "><a href="manage-medicine.php" >Manage medicine</a></li>
          <li class="breadcrumb-item active">Change medicine</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Change medicine</h5>
                    <form class="row g-2" method="post" action="medicine-handler.php">
                        <div class="col-12">
                            <label  class="form-label">Enter medicine name</label>
                            <input type="text" class="form-control rounded-1" name="mName" value="<?php echo $row["Name"]; ?>">
                        </div>

                        <div class="col-12">
                            <label  class="form-label">Seelct medicine type</label>
                            <select name="mType" class="form-select rounded-1">
                                <option value="<?php echo $row["Type"]; ?>"><?php echo $row["Type"]; ?></option>
                                <option value="Tablet">Tablet</option>
                                <option value="Pill">Pill</option>
                                <option value="Capsule">Capsule</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label  class="form-label">Enter manufactured date</label>
                            <input type="date" class="form-control rounded-1" name="manufactured" value="<?php echo $row["ManufacturedDate"]; ?>">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                        </div>
                        <div class="col-12">
                            <label  class="form-label">Enter expired</label>
                            <input type="date" class="form-control rounded-1" name="expired" value="<?php echo $row["ExpiredDate"]; ?>">
                        </div>
                        <div class="col-12 my-3">
                            <button type="submit" name="changeMedicine" class="btn btn-primary w-100 rounded-1">Change</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

<?php include "inc/footer.php"; ?>