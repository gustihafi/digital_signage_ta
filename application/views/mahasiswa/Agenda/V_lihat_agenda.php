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
              <a href="<?php echo base_url('mahasiswa/tambah_agenda') ?>"><button class="btn btn-primary"><i class="fa fa-plus"></i> Agenda</button></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
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
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                    <td>Internet
                    Explorer 4.0
                  </td>
                  <td><a href="<?php echo base_url('mahasiswa/edit_agenda') ?>"><button class="btn btn-primary"><i class="fas fa-edit"></i> Agenda</button></a></td>
                </tr>
           
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