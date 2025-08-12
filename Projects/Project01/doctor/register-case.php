<?php include "inc/header.php"; ?>

  <!-- ======= Sidebar ======= -->
    <?php include "inc/sidebar.php"; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <!-- <h1>Data Tables</h1> -->
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./" >Home</a></li>
          <li class="breadcrumb-item "><a href="manage-case.php" >Manage case</a></li>
          <li class="breadcrumb-item active">Register case</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Register case</h5>
                    <form class="row g-2" method="post" action="patient-handler.php">
                        <div class="col-12">
                            <label  class="form-label">Enter case name</label>
                            <input type="text" class="form-control rounded-1" placeholder="Enter case name"  name="cName" required>
                        </div>
                        <div class="col-12">
                            <label  class="form-label">Enter case description</label>
                            <textarea class="form-control" name="description"  placeholder="Enter case description" id="floatingTextarea" style="height: 100px;"></textarea>
                        </div>
                        
                        <div class="col-12 my-3">
                            <button type="submit" name="addCase" class="btn btn-primary w-100 rounded-1">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

<?php include "inc/footer.php"; ?>