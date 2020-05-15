<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit kelas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit kelas</li>
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
                <h3 class="card-title">Form Edit kelas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="<?php echo base_url('admin/proses_edit_kelas') ?>">
                <input type="hidden" class="form-control" id="id_kelas" name="id_kelas" value="<?php echo $dt['id_kelas']; ?>" placeholder="ID kelas">
                <div class="card-body">
                  <div class="row">
                      <div class="col-md-12">
                        
                          <div class="form-group">
                            <label for="kelas">kelas</label>
                            <input type="text" class="form-control" id="kelas" name="kelas" value="<?php echo $dt['kelas']; ?>" placeholder="Prodi">
                          </div>
                          <div class="form-group">
                            <?php 
                            echo form_label('Prodi','prodi');
                            $selected = set_value('prodi',$dt['prodi']);
                            echo form_dropdown('prodi', $prodi, $selected, "class='form-control select2' style='width: 100%;' name='prodi' id='prodi'");
                            
                            ?>
                        </div>
                      </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class="btn btn-danger" href="<?php echo base_url('admin/lihat_kelas'); ?>"> Cancel</a>
                </div>
              </form>
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
