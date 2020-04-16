<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Unit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tabel Unit</li>
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
              <h3 class="card-title">Data Unit</h3>
            </div>
            <div class="card-header">
              <a href="<?php echo base_url('admin/tambah_unit') ?>"><button class="btn btn-primary"><i class="fa fa-plus"></i> Unit</button></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th> No</th>
                  <th> Unit</th>
                  <th> Golongan</th>
                  <th> Aksi</th>
                 
                </tr>
                </thead>
                <tbody>
                <?php 
                $no  = 1;
                foreach ($data as $key):
                
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $key['nama_unit']; ?></td>
                  <td><?php echo $key['golongan']; ?></td>
                  <td><a href="<?php echo base_url('admin/edit_unit/'.$key['id_unit']) ?>"><button class="btn btn-primary"><i class="fas fa-edit"></i> Unit</button></a></td>
                 
                </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th> No</th>
                  <th> Unit</th>
                  <th> Golongan</th>
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