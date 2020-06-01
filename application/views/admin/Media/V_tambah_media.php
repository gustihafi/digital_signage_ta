<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah media</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah media</li>
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
                <h3 class="card-title">Form Tambah media</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?= form_open_multipart('admin/proses_tambah_media', array('class' => 'form', 'id' => 'formID', 'role'=>'form'));?>
                <div class="card-body">
                  <div class="row">
                      <div class="col-md-6">
                          <!-- <div class="form-group">
                            <label for="id_golongan">ID Golongan</label>
                            <input type="text" class="form-control" id="id_golongan" name="id_golongan" placeholder="ID Golongan">
                          </div> -->
                          <div class="form-group">
                            <label for="golongan">Media</label>
                            <input type="file" class="form-control" id="file" name="file" placeholder="Masukan media">
                          </div>
                          <div class="form-group">
                            <label for="golongan">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal_upload" name="tanggal_upload" placeholder="Tanggal Upload">
                          </div>
                          <div class="form-group">
                            <?php 
                            echo form_label('Status','status');
                            $selected = set_value('status');
                            $status = array('0'=>'Pilih ','Belum'=>'Belum','Sudah'=>'Sudah');
                            echo form_dropdown('status', $status, $selected, "class='form-control select2' style='width: 100%;' name='status' id='status'");
                            ?>
                        </div>
                      </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="<?php echo base_url('admin/lihat_media'); ?>"><button class="btn btn-danger">Cancel</button></a>
                </div>
              <?php form_close(); ?>
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
