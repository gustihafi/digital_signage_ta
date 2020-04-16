<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Unit Pelaksana</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Unit Pelaksana</li>
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
                <h3 class="card-title">Form Edit Unit Pelaksana</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="<?php echo base_url('admin/proses_edit_unit') ?>">
                <div class="card-body">
                  <div class="row">
                      <div class="col-md-6">
                            <input type="hidden" class="form-control" name="id_unit" value="<?= $unit['id_unit'] ?>" placeholder="ID Unit">
                          <div class="form-group">
                            <label for="golongan">Unit Pelaksana</label>
                            <input type="text" class="form-control" id="unit" name="nama_unit" value="<?= $unit['nama_unit'] ?>" placeholder="Unit Pelaksana">
                          </div>
                          <div class="form-group">
                              <label>Golongan</label>
                              <select class="form-control select2" name="id_golongan" style="width: 100%;">
                                <option value="<?php echo $unit['id_golongan']; ?>"><?php echo $unit['golongan']; ?></option>
                                <?php foreach ($golongan as $dta):
                                  if ($dt['id_golongan'] != $dta['id_golongan']):
                                ?>
                                <option value="<?php echo $dta['id_golongan']; ?>"><?php echo $dta['golongan']; ?></option>
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
                  <a class="btn btn-danger" href="<?php echo base_url('admin/lihat_unit'); ?>"> Cancel</a>
                </div>
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
