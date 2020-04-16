<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Unit Pelaksana</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Unit Pelaksana</li>
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
                <h3 class="card-title">Form Tambah Unit Pelaksana</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="<?php echo base_url('admin/proses_tambah_akun') ?>">
                <div class="card-body">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="id_golongan">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                          </div>
                          <div class="form-group">
                            <label for="golongan">Password</label>
                            <input type="password" class="form-control"  id="password" name="password" placeholder="Password">
                            <input type="checkbox" class="form-checkbox"> Show password
                          </div>
                           <div class="form-group">
                            <label for="golongan">Level</label>
                            <select  class="form-control select2" id="level" name="level">
                              <option selected="selected" disabled="">----Pilih Level----</option>
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
                              <option selected="selected" disabled="">----Pilih Unit----</option>
                              <?php foreach ($unit as $dt):?>
                              <option value="<?php echo $dt['id_unit']; ?>"><?php echo $dt['nama_unit']; ?></option>
                            <?php endforeach; ?>
                            </select>
                          </div>
                      </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="<?php echo base_url('admin/lihat_akun'); ?>"><button class="btn btn-danger">Cancel</button></a>
                </div>
              </form>
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
