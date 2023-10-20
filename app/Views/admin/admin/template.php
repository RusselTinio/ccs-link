
<nav class="navbar" id="header">
        <div class="text-center navbar-brand-wrapper align-items-center justify-content-center">
          <a class="navbar-brand brand-logo " href="<?= base_url('adminController/Admin/AdminView')?>"><img src="<?= base_url('style/images/logo.png')?>" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="forecast.html"><img src="<?= base_url('style/images/logo1.png')?>" alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
         
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="<?= base_url('style/images/faces/admin.png')?>" alt="profile"/>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                  <i class="ti-settings text-primary"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="<?= base_url('AdminController/Admin/logout')?>">
                  <i class="ti-power-off text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
            </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      
      <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-ite">
            <p class="nav-link" href="<?= base_url('Admin')?>" id="profile">
              <i class="menu-icon"><img src="<?= base_url('style/images/faces/admin.png')?>"/></i>
               <span class="menu-title" id="profile1"><?= strtoupper($adminInfo['username']) ?></span>
            </p>
             </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Admin')?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Analytics</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/user_list')?>">
            <i class="icon-head menu-icon"></i>
            <span class="menu-title">List of Users</span> 
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/mentor_list')?>">
            <i class="icon-head menu-icon"></i>
            <span class="menu-title">List of Mentors</span> 
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/job_list')?> ">
          <i class="icon-briefcase menu-icon"></i>
          <span class="menu-title">List of Jobs</span> 
        </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/news_and_events')?>">
            <i class="icon-paper menu-icon"></i>
            <span class="menu-title">List of News and Events</span> 
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/donation')?>">
            <i class="icon-paper menu-icon"></i>
            <span class="menu-title">Donation</span> 
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/audit_trail')?>">
            <i class="icon-paper menu-icon"></i>
            <span class="menu-title">Audit Trail</span> 
          </a>
        </li>
        </ul>
      </nav>
    