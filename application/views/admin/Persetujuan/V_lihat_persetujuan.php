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
              </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead>
                <tr>
                  <th> No</th>
                  <th> Agenda</th>
                  <th> Unit</th>
                   <th> Display</th>
                  <th> Tanggal agenda</th>
                  <th> Tanggal selesai</th>
                  <th> Jam Mulai</th>
                  <th> Jam Selesai</th>
                  <th> Status Approve</th>
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
                  <td><?php echo $key['display']; ?></td>
                  <td><?php echo $key['tanggal_agenda']; ?></td>
                  <td><?php echo $key['tanggal_selesai']; ?></td>
                  <td><?php echo $key['jam_mulai']; ?></td>
                  <td><?php echo $key['jam_selesai']; ?></td>
                 
                  <td><?php echo $key['status']; ?></td>
                  <td><?php echo $key['tanggal_pengajuan']; ?></td>
                  <td><?php echo $key['tanggal_publish']; ?></td>
                  <td>
                  <button style="margin:5px;" class="btn btn-sm btn-primary update-record"><i class="fas fa-edit"></i> Publish</button>
                  <?php if ($key['status'] == 'Belum Approve') { ?>
                    <a href="<?php echo base_url('admin/proses_approve_persetujuan/'.$key['id_persetujuan']) ?>"><button style="margin:5px;" class="btn btn-sm btn-success"><i class="fas fa-check"></i> Approve</button></a></td>
                  <?php } ?> 
                </tr>
                 <?php 
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
            <?php include('V_edit_persetujuan'); ?>
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