<?php include "inc/header.php"; ?>

  <!-- ======= Sidebar ======= -->
    <?php 
        include "inc/sidebar.php"; 

        $doctor = "select * from doctor  where status =  'Enable'";
        $doctorQuery = mysqli_query($con, $doctor);
    ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <!-- <h1>Data Tables</h1> -->
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./" >Home</a></li>
          <li class="breadcrumb-item"><a href="manage-appointment.php">Manage appointment</a></li>
          <li class="breadcrumb-item active">Add appointment</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Add appointment</h5>
                    <form class="row g-2" method="post" action="patient-handler.php">

                        <div class="col-12">
                            <label  class="form-label">Seelct doctor name</label>
                            <select name="doctor" class="form-select rounded-1">
                                <option value="null">Select doctor name</option>
                                <?php 
                                    while ($fetch = mysqli_fetch_array($doctorQuery)) 
                                    {
                                ?>
                                     <option value="<?php echo $fetch['DoctorID']; ?>"><?php echo ucwords($fetch['FirstName']." ".$fetch['LastName']); ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>

                        <div class="col-12">
                            <label  class="form-label">Enter appointment date</label>
                            <input type="date" required class="form-control rounded-1"  name="date">
                        </div>
                        <div class="col-12 my-3">
                            <button type="submit" name="addAppointment" class="btn btn-primary w-100 rounded-1">Add appointment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

<?php include "inc/footer.php"; ?>