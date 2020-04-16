<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Golongan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Golongan</li>
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
                <h3 class="card-title">Form Edit Golongan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="<?php echo base_url('admin/proses_edit_golongan') ?>">
                <div class="card-body">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="id_golongan">ID Golongan</label>
                            <input type="text" class="form-control" id="id_golongan" value="<?php echo $dt['id_golongan']; ?>" name="id_golongan" placeholder="ID Golongan">
                          </div>
                          <div class="form-group">
                            <label for="golongan">Golongan Pelaksana</label>
                            <input type="text" class="form-control" id="golongan" name="golongan" value="<?php echo $dt['golongan']; ?>" placeholder="Golongan Pelaksana">
                          </div>
                      </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="<?php echo base_url('admin/lihat_golongan'); ?>"><button class="btn btn-danger">Cancel</button></a>
                </div>
              </form>
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
