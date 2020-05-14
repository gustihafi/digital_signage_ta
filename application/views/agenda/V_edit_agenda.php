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
              <form role="form" method="POST" action="<?php echo base_url('admin/proses_edit_agenda') ?>">
                <div class="card-body">
                  <div class="row">
                      <div class="col-md-6">

                      
                         <!--  <div class="form-group">
                            <label for="id_golongan">ID  Agenda</label> -->
                            <input type="hidden" class="form-control" id="id_agenda" name="id_agenda" value="<?php echo $dt['id_agenda']; ?>"placeholder="ID Agenda">
                          <!-- </div> -->
                          <div class="form-group">
                            <label for="golongan">Agenda</label>
                            <input type="text" class="form-control" id="agenda" value="<?php echo $dt['nama_agenda']; ?>"name="agenda" placeholder="Nama Agenda">
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

                            <div class="form-group">
                          <label>Display</label>
                          <select class="form-control select2" name="id_display" style="width: 100%;">
                            <option value="<?php echo $dt['id_display']; ?>"><?php echo $dt['display']; ?></option>
                            <?php foreach ($display as $dta):?>
                            <option value="<?php echo $dt['id_display']; ?>"><?php echo $dta['display']; ?></option>
                          <?php endforeach; ?>
                          </select>
                        </div>
                          <div class="form-group">
                            <label for="golongan">Tanggal Agenda</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal_agenda" value="<?php echo $dt['tanggal_agenda']; ?>" placeholder="Tanggal Agenda">
                          </div>
                          <div class="form-group">
                            <label for="id_golongan">Tanggal Selesai</label>
                            <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai"  value="<?php echo $dt['tanggal_selesai']; ?>" placeholder="Tanggal Selesai">
                          </div>


                      </div>
                      <div class="col-md-6">

                          <div class="form-group">
                            <label for="golongan">Jam Mulai</label>
                            <input type="time" class="form-control" id="jam_mulai" name="jam_mulai" value="<?php echo $dt['jam_mulai']; ?>" placeholder="Jam Mulai">
                          </div>
                           <div class="form-group">
                            <label for="golongan">Jam Selesai</label>
                            <input type="time" class="form-control" id="jam_selesai" name="jam_selesai" value="<?php echo $dt['jam_selesai']; ?>" placeholder="Jam Selesai">
                          </div>
                            <!-- <div class="form-group"> -->
                      <!--     <label>Status</label>
                          <select class="form-control select2" name="status" style="width: 100%;">
                            <option value="Diterima">Diterima</option>
                             <option value="Ditolak">Ditolak</option>
                          </select>
                        </div>
                          <div c
                          <div class="form-group">
                            <label for="golongan">Tanggal Pengajuan</label>
                            <input type="date" class="form-control" id="tanggal_pengajuan" name="tanggal_pengajuan" value="<?php echo $dt['tanggal_pengajuan']; ?>"  placeholder="Tanggal Pengajuan">
                          </div>
                          <div class="form-group">
                            <label for="golongan">Tanggal Publish</label>
                            <input type="date" class="form-control" id="tanggal_publish" name="tanggal_publish" value="<?php echo $dt['tanggal_publish']; ?>" placeholder="Tanggal publish">
                          </div>

 -->

                      </div>
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
