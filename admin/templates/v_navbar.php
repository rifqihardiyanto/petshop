<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo" href="index.php?page=0"><img src="../vendor/images/logo.png" alt="logo"/></a>
    <a class="navbar-brand brand-logo-mini" href="index.php?page=0"><img src="../vendor/images/logo-mini.png" alt="logo"/></a>
    <button class="navbar-toggler navbar-toggler align-self-center d-none d-lg-flex" type="button" data-toggle="minimize">
      <span class="typcn typcn-th-menu"></span>
    </button>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle  pl-0 pr-0" href="#" data-toggle="dropdown" id="profileDropdown">
          <i class="typcn typcn-user-outline mr-0"></i>
          <span class="nav-profile-name"><?= $account->nama_admin; ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="index.php?page=9">
          <i class="typcn typcn-cog text-primary"></i>
          Settings
          </a>
          <a class="dropdown-item" href="../login.php">
          <i class="typcn typcn-power text-primary"></i>
          Logout
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="typcn typcn-th-menu"></span>
    </button>
  </div>
</nav>
