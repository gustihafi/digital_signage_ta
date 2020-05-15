<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Agenda</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Agenda</li>
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
                <h3 class="card-title">Form Edit Agenda</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="<?php echo base_url('jadwalmengajar/proses_edit_jadwalmengajar') ?>">
                <div class="card-body">
                  <div class="row">
            

                      
                         <!--  <div class="form-group">
                            <label for="id_golongan">ID  Agenda</label> -->
                            <input type="hidden" class="form-control" id="id_jadwal" name="id_jadwal" value="<?php echo $dt['id_jadwal']; ?>">
                            <input type="hidden" class="form-control" id="idx" name="idx" value="<?php echo $dt['id_jadwal']; ?>">
                            <input type="hidden" class="form-control" id="prodix" name="prodix" value="<?php echo $dt['prodi']; ?>">
                          <!-- </div> -->
             

                 <div class="col-md-12">

                      
                         <!--  <div class="form-group">
                            <label for="id_golongan">ID  jadwalmengajar</label>
                            <input type="text" class="form-control" id="id_jadwalmengajar" name="id_jadwalmengajar" placeholder="ID jadwalmengajar">
                          </div> -->
                          <div class="form-group">
                            <?php 
                            echo form_label('Prodi','prodi');
                            $selected = set_value('prodi', $dt['prodi']);
                            echo form_dropdown('prodi', $prodi, $selected, "class='form-control select2' style='width: 100%;' name='prodi' id='prodi'");
                            
                            ?>
                        </div>
                      </div>
                       <div class="col-md-12">
                            <div class="form-group ">
                                <?php 
                                echo form_label('Kelas','kelas');
                                $selected = set_value('kelas');
                                echo form_dropdown('kelas', array(''=>'Pilih Kelas'), $selected, "class='form-control select2' style='width: 100%;' name='kelas' id='kelas'");
                                
                                ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group ">
                                <?php 
                                echo form_label('Mata Kuliah','matakuliah');
                                $selected = set_value('matakuliah');
                                echo form_dropdown('matakuliah', array(''=>'Pilih Mata Kuliah'), $selected, "class='form-control select2' style='width: 100%;' name='matakuliah' id='matakuliah'");
                                
                                ?>
                            </div>
                        </div>
                       <div class="col-md-12">

                          <div class="form-group">
                            <label for="golongan">waktu Mulai</label>
                            <input type="time" class="form-control" id="waktu_mulai" name="waktu_mulai" placeholder="waktu Mulai" value="<?php echo $dt['waktu_mulai']; ?>">
                          </div>


                      </div>
                      <div class="col-md-12">

                          
                           <div class="form-group">
                            <label for="golongan">waktu Selesai</label>
                            <input type="time" class="form-control" id="waktu_selesai" name="waktu_selesai" placeholder="waktu Selesai" value="<?php echo $dt['waktu_selesai']; ?>">
                          </div>
                    
                      </div>

                      <div class="col-md-12">

                          
                           <div class="form-group">
                            <label for="golongan">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal" value="<?php echo $dt['tanggal']; ?>">
                          </div>
                    
                      </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="<?php echo base_url('admin/lihat_agenda'); ?>"><button class="btn btn-danger">Cancel</button></a>
                </div>
              </form>
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
