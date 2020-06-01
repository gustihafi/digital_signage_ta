<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data media</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tabel media</li>
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
              <h3 class="card-title">Data media</h3>
            </div>
              <div class="card-header">
              <a href="<?php echo base_url('admin/tambah_media') ?>"><button class="btn btn-primary"><i class="fa fa-plus"></i>media</button></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th> No</th>
                  <th> Nama Media</th>
                  <th> Tanggal Upload</th>
                  <th> Status</th>
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
                  <td><a href="<?= site_url('file/'.$key['nama_media']) ?>" data-toggle="tooltip" ><img src="<?= base_url('file/'.$key['nama_media']); ?>" width="240px"></a></td>
                  <td><?php echo $key['tanggal_upload']; ?></td>
                  <td><?php echo $key['status']; ?></td>
                  <td>
                    <center>
                      <a href="<?php echo base_url('admin/edit_media/'.$key['id_media']) ?>"><button class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></a>
                      |
                      <a href="<?php echo base_url('admin/hapus_media/'.$key['id_media']) ?>"><button class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button></a>
                    </center>
                  </td>
                </tr>
                <?php 
                endforeach;
                ?>
                </tbody>
                <tfoot>
                <tr>
                  <th> No</th>
                  <th> media</th>
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