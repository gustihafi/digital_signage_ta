<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Akun</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Akun</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Edit Akun</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="<?php echo base_url('admin/proses_edit_akun') ?>">
                <div class="card-body">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="id_golongan">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $dt['username']; ?>"name="username" placeholder="Username">

                            <input type="hidden" class="form-control" name="id_akun" value="<?php echo $dt['id_akun']; ?>"name="id_akun">
                          </div>
                          <div class="form-group">
                            <label for="golongan">Password Baru</label>
                            <input type="password" class="form-control" id="password" name="pwd_baru" placeholder="Password">
                          </div>
                          <div class="form-group">                                        
                              <label>Password Lama  </label>
                              <input type="checkbox" name="pwd_lama" value="<?= $dt['password'] ?>" /><br>
                              * Centang tidak ingin ganti password
                          </div>
                          <div class="form-group">
                              <label>Level</label>
                              <select class="form-control select2" name="level" style="width: 100%;">
                                <option selected="selected" value="<?php echo $dt['level']; ?>"><?php echo $dt['level']; ?></option>
                                <option value="Admin">Admin</option>
                                <option value="Mahasiswa">Mahasiswa</option>
                                <option value="Asisten Wadir">Asisten Wadir</option>
                                <option value="Asisten Direktur">Asisten Direktur</option>
                                <option value="Staf">Staf</option>
                              </select>
                            </div>
                          <div class="form-group">
                              <label>Unit Pelaksana</label>
                              <select class="form-control select2" name="id_unit" style="width: 100%;">
                                <option value="<?php echo $dt['id_unit']; ?>"><?php echo $dt['nama_unit']; ?></option>
                                <?php foreach ($unit as $dta):
                                  if ($dt['id_unit'] != $dta['id_unit']):
                                ?>
                                <option value="<?php echo $dta['id_unit']; ?>"><?php echo $dta['nama_unit']; ?></option>
                              <?php 
                              endif;
                              endforeach; ?>
                              </select>
                            </div>
                      </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                  <a class="btn btn-danger" href="<?php echo base_url('admin/lihat_akun'); ?>"> Cancel</a>
                </div>
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
