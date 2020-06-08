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

        <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  </div>

                <h3 class="profile-username text-center"><?= $record->username; ?></h3>

                <p class="text-muted text-center"><?= $record->level; ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Username</b> <a class="float-right"><?= $record->username; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Level</b> <a class="float-right"><?= $record->level; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Unit</b> <a class="float-right"><?= unit($record->id_unit); ?></a>
                  </li>
                </ul>

                <a href="<?= site_url('akun/edit_akun/'.$record->id_akun) ?>" class="btn btn-primary btn-block"><b>Ubah Data</b></a>
               
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