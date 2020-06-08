<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="<?php echo base_url() ?>/asset/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>/asset/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?= site_url('admin/profil'); ?>" title="Profil" class="d-block"><?= $this->session->userdata('username'); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url('admin') ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
               
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/lihat_golongan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Golongan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/lihat_unit') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/lihat_prodi') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Prodi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/lihat_kelas') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/lihat_matakuliah') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mata Kuliah</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/lihat_informasi') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Informasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/lihat_agenda') ?>" class="nav-link">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Agenda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/lihat_persetujuan') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Persetujuan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/lihat_media') ?>" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
              Media
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?php echo base_url('admin/lihat_display') ?>" class="nav-link">
              <i class="nav-icon fas fa-desktop"></i>
              <p>
              Display
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/lihat_akun') ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
              Akun
                
              </p>
            </a>
          </li>
          <br>
          <li class="nav-item">
            <a href="<?php echo base_url('Auth/logout') ?>" onClick="return confirm('Apakah Ingin Logout?')" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
              Logout
              </p>
            </a>
          </li>
        
        
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>