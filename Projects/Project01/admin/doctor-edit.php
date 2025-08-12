<?php include "inc/header.php"; ?>

  <!-- ======= Sidebar ======= -->
    <?php 
        include "inc/sidebar.php"; 

        $select = "select * from doctor  where DoctorID = '".$_GET['id']."'";
        $query = mysqli_query($con, $select);
        $row = mysqli_fetch_array($query);
    ?>



  <main id="main" class="main">

    <div class="pagetitle">
      <!-- <h1>Data Tables</h1> -->
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./" >Home</a></li>
          <li class="breadcrumb-item "><a href="manage-doctor.php" >Manage doctor</a></li>
          <li class="breadcrumb-item active">View doctor details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-5">

          
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">View doctor</h5>

              <!-- Pills Tabs -->
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Change details</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Change password</button>
                </li>
            
              </ul>
              <div class="tab-content pt-2" id="myTabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="home-tab">
                    <form class="row g-2" method="post" action="doctor-handler.php">
                        <div class="col-12">
                            <label  class="form-label">Enter first name</label>
                            <input type="text" class="form-control rounded-1"  value="<?php echo $row['FirstName']; ?>" name="first">
                            <input type="hidden"  name="id"  value="<?php echo $_GET['id']; ?>">
                        </div>

                        <div class="col-12">
                            <label  class="form-label">Enter last name</label>
                            <input type="text" class="form-control rounded-1"  value="<?php echo $row['LastName']; ?>"  name="last">
                        </div>
                        <div class="col-12">
                            <label  class="form-label">Enter address</label>
                            <input type="text" class="form-control rounded-1" value="<?php echo $row['Address']; ?>"  name="address">
                        </div>
                        <div class="col-12">
                            <label  class="form-label">Enter DOB</label>
                            <input type="date" class="form-control rounded-1" value="<?php echo $row['DateOfBirth']; ?>"  name="dob">
                        </div>
                        <div class="col-12">
                            <label  class="form-label">Enter phone number</label>
                            <input type="tel" class="form-control rounded-1" value="<?php echo $row['PhoneNumber']; ?>"  name="phone">
                        </div>
                        <div class="col-12 my-3">
                            <button type="submit" name="updateDoctor" class="btn btn-primary w-100 rounded-1">Change</button>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form class="row g-2" method="post" action="doctor-handler.php">
                        <div class="col-12">
                            <label  class="form-label">Enter new password</label>
                            <input type="text" required class="form-control rounded-1" name="password" placeholder="Enter new password">
                            <input type="hidden"  name="id"  value="<?php echo $_GET['id']; ?>">
                        </div>

                        <div class="col-12 my-3">
                            <button type="submit" name="updatePassword" class="btn btn-primary w-100 rounded-1">Change </button>
                        </div>
                    </form>
                </div>
                
              </div><!-- End Pills Tabs -->

            </div>
          </div>



        </div>

      </div>
    </section>

  </main><!-- End #main -->

<?php include "inc/footer.php"; ?>