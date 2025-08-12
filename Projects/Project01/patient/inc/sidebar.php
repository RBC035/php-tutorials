<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="./">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-bag-plus"></i><span>Hospital details </span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="view-dosage.php">
          <i class="bi bi-circle"></i><span>Case dosage</span>
        </a>
      </li>

      <li>
        <a href="manage-appointment.php">
          <i class="bi bi-circle"></i><span>Manage appointment</span>
        </a>
      </li>

    </ul>
  </li><!-- End Components Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#settings" data-bs-toggle="collapse" href="#">
      <i class="bi bi-gear"></i><span>Settings </span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="settings" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="my-account.php">
          <i class="bi bi-circle"></i><span>My profile</span>
        </a>
      </li>

      <li>
        <a href="change-password.php">
          <i class="bi bi-circle"></i><span>Change password</span>
        </a>
      </li>

    </ul>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="../inc/signout.php">
      <i class="bi bi-box-arrow-right"></i>
      <span>Sign out</span>
    </a>
  </li><!-- End Blank Page Nav -->

</ul>

</aside><!-- End Sidebar-->