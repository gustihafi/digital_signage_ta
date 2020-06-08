<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Akun</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tabel Akun</li>
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
              <h3 class="card-title">Data Akun</h3>
            </div>
            <div class="card-header">
              <a href="<?php echo base_url('admin/tambah_akun') ?>"><button class="btn btn-primary"><i class="fa fa-plus"></i> Akun</button></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th> No</th>
                  <th> Username</th>
                  <th> Level</th>
                  <th> Unit</th>
                  <th> Aksi</th>
                 
                </tr>
                </thead>
                <tbody>
                <?php 
                  $no = 1;
                  foreach ($data as $key):
                ?>
                <tr>
                  <?php if($key['username'] == $this->session->userdata('username')){

                  }else{ ?>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $key['username']; ?></td>
                  <td><?php echo $key['level']; ?></td>
                  <td><?php echo $key['nama_unit']; ?></td>
                  <td>
                  <a href="<?php echo base_url('admin/edit_akun/'.$key['id_akun']) ?>"><button class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></a> 
                  <a href="<?php echo base_url('admin/hapus_akun/'.$key['id_akun']) ?>" onClick="return confirm('Yakin Hapus?')"><button class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button></a>
                  </td>
                <?php  } ?>
                  

                </tr>
                <?php endforeach; ?>
                </tbody>
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