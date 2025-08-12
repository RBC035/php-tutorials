<?php include "inc/header.php"; ?>

  <!-- ======= Sidebar ======= -->
    <?php include "inc/sidebar.php"; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <!-- <h1>Data Tables</h1> -->
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./" >Home</a></li>
          <li class="breadcrumb-item active">My profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">My profile</h5>
                    <form class="row g-2" method="post" action="patient-handler.php">
                        <div class="col-12">
                            <label  class="form-label">Enter first name</label>
                            <input type="text" required class="form-control rounded-1" value="<?php echo $profile['FirstName']; ?>" name="first">
                        </div>

                        <div class="col-12">
                            <label  class="form-label">Enter last name</label>
                            <input type="text" required class="form-control rounded-1" value="<?php echo $profile['LastName']; ?>" name="last">
                        </div>
                        <div class="col-12">
                            <label  class="form-label">Enter address</label>
                            <input type="text" required class="form-control rounded-1" value="<?php echo $profile['Address']; ?>" name="address">
                        </div>
                        <div class="col-12">
                            <label  class="form-label">Enter DOB</label>
                            <input type="date" required class="form-control rounded-1" value="<?php echo $profile['DateOfBirth']; ?>" name="dob">
                        </div>
                        <div class="col-12">
                            <label  class="form-label">Enter phone number</label>
                            <input type="tel" required class="form-control rounded-1" value="<?php echo $profile['PhoneNumber']; ?>" name="phone">
                        </div>
                        <div class="col-12 my-3">
                            <button type="submit" name="changeAccount" class="btn btn-primary w-100 rounded-1">Change</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

<?php include "inc/footer.php"; ?>