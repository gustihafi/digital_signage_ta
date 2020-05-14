<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>DISPLAY DIREKTUR</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- -->
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="" >
        <div class="row">
          <div class="col-lg-12" style="margin-top: 30px">
            <div class="card">
              <div class="card-body" style="display: flex;">
                <div class="row">
                    <img  style="height: 100px; width: 10%" src="<?php echo base_url() ?>file/logo.png">
                    <div class="col-md-5">
                      <h2 style="margin-top: 4%;">Politeknik Negeri Tanah Laut</h2>
                      <p class="card-text">
                        Agenda Signage
                      </p>
                    </div>
                    <div class="col-md-5" style="display: flex;">
                        <div class="row">
                          <div class="col-md-12">
                            <h5>Pelaihari, Weather</h5>
                          </div>
                        </div>
                      

                    </div>
                </div>
              </div>
            </div>



            <div class="card card-primary card-outline">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-7">
                   
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-4 col-sm-6 col-12">
                            <div class="info-box bg-info">
                              <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

                              <div class="info-box-content">
                                <span class="info-box-text">Agenda Hari ini</span>
                                <span class="info-box-number">41,410</span>

                                <div class="progress">
                                  <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                  70% Increase in 30 Days
                                </span>
                              </div>
                              <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                          </div>
                          <!-- /.col -->
                          <div class="col-md-4 col-sm-6 col-12">
                            <div class="info-box bg-success">
                              <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

                              <div class="info-box-content">
                                <span class="info-box-text">Agenda Sedang Berjalan</span>
                                <span class="info-box-number">41,410</span>

                                <div class="progress">
                                  <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                  70% Increase in 30 Days
                                </span>
                              </div>
                              <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                          </div>
                          <!-- /.col -->
                          <div class="col-md-4 col-sm-6 col-12">
                            <div class="info-box bg-warning">
                              <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

                              <div class="info-box-content">
                                <span class="info-box-text">Agenda Minggu ini</span>
                                <span class="info-box-number">41,410</span>

                                <div class="progress">
                                  <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                  70% Increase in 30 Days
                                </span>
                              </div>
                              <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                          </div>
                          </div>
                      </div>
                      <div class="col-md-12">
                        <div class="card card-default">
                        <div class="card-header">
                          <h3 class="card-title">
                            <i class="fas fa-bullhorn"></i>
                            Callouts
                          </h3>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                        <marquee direction="up" scrollamount="5" align="center"><p id="p1">
                          <div class="callout callout-danger">
                            <h5>I am a danger callout!</h5>

                            <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire
                              soul,
                              like these sweet mornings of spring which I enjoy with my whole heart.</p>
                          </div>
                          <div class="callout callout-info">
                            <h5>I am an info callout!</h5>

                            <p>Follow the steps to continue to payment.</p>
                          </div>
                          <div class="callout callout-warning">
                            <h5>I am a warning callout!</h5>

                            <p>This is a yellow callout.</p>
                          </div>
                          <div class="callout callout-success">
                            <h5>I am a success callout!</h5>

                            <p>This is a green callout.</p>
                          </div>
                        </marquee>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="col-md-5">

                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title" style="text-align: center;">AGENDA MENGAJAR</h3>

                          <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                              <!-- <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                              <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                              </div> -->
                            </div>
                          </div>
                        </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 625px;">

                <table class="table  ">
                <marquee direction="up" scrollamount="5" align="center">
                  <thead>
                    <tr>
                      <th>Jurusan</th>
                      <th>Kelas</th>
                      <th>Mata Kuliah</th>
                      <th>Waktu</th>
                    </tr>
                  </thead>
                 
                     
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                    </tr>
                    <tr>
                      <td>219</td>
                      <td>Alexander Pierce</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-warning">Pending</span></td>
                    </tr>
                    <tr>
                      <td>657</td>
                      <td>Bob Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-primary">Approved</span></td>
                    </tr>
                    <tr>
                      <td>175</td>
                      <td>Mike Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-danger">Denied</span></td>
                    </tr>
                    <tr>
                      <td>134</td>
                      <td>Jim Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                    </tr>
                    <tr>
                      <td>494</td>
                      <td>Victoria Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-warning">Pending</span></td>
                    </tr>
                    <tr>
                      <td>832</td>
                      <td>Michael Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-primary">Approved</span></td>
                    </tr>
                    <tr>
                      <td>982</td>
                      <td>Rocky Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-danger">Denied</span></td>
                    </tr>

                  
                  </tbody>

                </marquee>
                </table>
              </div>

              <!-- /.card-body -->
            </div>
      
                  </div>
                </div>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-md-12"> 
            <div class="card">
              <marquee scrollamount="5" >
                <p> informasi berjalan</p> 
              </marquee> 
            </div>
          </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>asset/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>asset/dist/js/adminlte.min.js"></script>
</body>
</html>
