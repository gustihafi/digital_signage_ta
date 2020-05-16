<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Agenda</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tabel Agenda/li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Agenda</h3>
            </div>
            <div class="card-header">
              <a href="<?php echo base_url('admin/tambah_agenda') ?>"><button class="btn btn-primary"><i class="fa fa-plus"></i> Agenda</button></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead>
                <tr>
                  <th> No</th>
                  <th> Agenda</th>
                  <th> Unit</th>
                  <th> Tanggal agenda</th>
                  <th> Tanggal selesai</th>
                  <th> Jam Mulai</th>
                  <th> Jam Selesai</th>
                  <th> Status</th>
                  <th> Tanggal Pengajuan</th>
                  <th> Tanggal Publish</th>
                  <th> Aksi</th>
                 
                 
                </tr>
                </thead>
                <tbody>
                <?php 
                  $no = 1;
                  foreach ($data as $key):
                    
                ?>
                <tr>
                   <td><?php echo $no++; ?></td>
                  <td><?php echo $key['nama_agenda']; ?></td>
                 <td><?php echo $key['nama_unit']; ?></td>
                 <td><?php echo $key['tanggal_agenda']; ?></td>
                  <td><?php echo $key['tanggal_selesai']; ?></td>
                    <td><?php echo $key['jam_mulai']; ?></td>
                   <td><?php echo $key['jam_selesai']; ?></td>
                 <td><?php echo $key['status']; ?></td>
                   <td><?php echo $key['tanggal_pengajuan']; ?></td>
                   <td><?php echo $key['tanggal_publish']; ?></td>
                  <td>
                  <a href="<?php echo base_url('admin/edit_agenda/'.$key['id_agenda']) ?>">
                  <button style="margin:5px;" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Agenda</button></a> 
                  
                  <a href="<?php echo base_url('admin/hapus_agenda/'.$key['id_agenda']) ?>">
                  <button style="margin:5px;" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</button></a>

                  <button style="margin:5px;" data-toggle="modal" data-target="#edit<?= $key['id_agenda']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-eye"></i> Display</button>
                  </td>
                </tr>
                 <?php 
                 include('pilih_display.php');
                endforeach;
                ?>
           
                </tbody>
               <tfoot>
                <tr>
                 <th> No</th>
                  <th> Agenda</th>
                  <th> Unit</th>
                  <th> Tanggal agenda</th>
                  <th> Tanggal selesai</th>
                  <th> Jam Mulai</th>
                  <th> Jam Selesai</th>
                  <th> Status</th>
                  <th> Tanggal Pengajuan</th>
                  <th> Tanggal Publish</th>
                  <th> Aksi</th>
                 
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>