<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data jadwalmengajar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tabel jadwalmengajar/li>
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
              <h3 class="card-title">Data jadwalmengajar</h3>
            </div>
            <div class="card-header">
              <a href="<?php echo base_url('jadwalmengajar/tambah_jadwalmengajar') ?>"><button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th> No</th>
                  <th> Prodi</th>
                   <th> Kelas</th>
                   <th> Mata Kuliah</th>
                   <th> Waktu Mulai</th>
                   <th> Waktu Selesai</th>
                   <th> Tanggal</th>
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
                  <td><?php echo prodi($key['prodi']); ?></td>
                 <td><?php echo kelas($key['kelas']); ?></td>
                 <td><?php echo matakuliah($key['matakuliah']); ?></td>
                 <td><?php echo $key['waktu_mulai']; ?></td>
                 <td><?php echo $key['waktu_selesai']; ?></td>
                 <td><?php echo $key['tanggal']; ?></td>
                  
                    <td>
                  <a href="<?php echo base_url('jadwalmengajar/edit_jadwalmengajar/'.$key['id_jadwal']) ?>">
                  <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Edit</button></a> 
                  
                  <a href="<?php echo base_url('jadwalmengajar/hapus_jadwalmengajar/'.$key['id_jadwal']) ?>">
                  <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</button></a>
                  </td>
                </tr>
                 <?php 
                endforeach;
                ?>
           
                </tbody>
               <tfoot>
                <tr>
                  <th> No</th>
                  <th> Prodi</th>
                   <th> Kelas</th>
                   <th> Mata Kuliah</th>
                   <th> Waktu Mulai</th>
                   <th> Waktu Selesai</th>
                   <th> Tanggal</th>
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