<?php include "inc/header.php"; ?>

  <!-- ======= Sidebar ======= -->
    <?php include "inc/sidebar.php"; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <!-- <h1>Data Tables</h1> -->
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./" >Home</a></li>
          <li class="breadcrumb-item active">Change password</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Change password</h5>
                    <form class="row g-2" method="post">
                        <div class="col-12">
                            <label  class="form-label">Enter current password</label>
                            <input type="text" class="form-control rounded-1" name="current">
                        </div>

                        <div class="col-12">
                            <label  class="form-label">Enter new password</label>
                            <input type="text" class="form-control rounded-1" name="new">
                        </div>
                        <div class="col-12">
                            <label  class="form-label">Enter confirm password</label>
                            <input type="text" class="form-control rounded-1" name="confirm">
                        </div>
                        
                        <div class="col-12 my-3">
                            <button type="submit" class="btn btn-primary w-100 rounded-1">Change</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

<?php include "inc/footer.php"; ?>