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

  <title>DISPLAY TEKNIK INFORMATIKA</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
<link rel="stylesheet" href="<?php echo base_url() ?>/asset/css/widget.css">
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
                    <img  style="height: 100px;" src="<?php echo base_url() ?>file/logo.png">
                    <div class="col-md-5">
                      <h2 style="margin-top: 4%;">Politeknik Negeri Tanah Laut</h2>
                      <p class="card-text">
                        Agenda Signage
                      </p>
                    </div>
                    <div class="col-md-5" style="display: flex; border: 5px solid black;">
                        <!-- <div class="konten" style="border: 5px solid black;"> -->
                          <!-- <div class="col-md-12" style="border: 5px solid black;">  -->
                          <div class="jam-digital" style="border: 5px solid black;">
                            <p>
                            <script type='text/javascript'>
                            
                                var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                                var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                                var date = new Date();
                                var day = date.getDate();
                                var month = date.getMonth();
                                var thisDay = date.getDay(),
                                    thisDay = myDays[thisDay];
                                var yy = date.getYear();
                                var year = (yy < 1000) ? yy + 1900 : yy;
                                document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                                //-->
                              </script>
                            </p>
                            <div class="kotak">
                              <p id="jam"></p>
                            </div>
                            <div class="kotak">
                              <p id="menit"></p>
                            </div>
                            <div class="kotak">
                              <p id="detik"></p>
                            </div>
                          <!-- </div> -->
                          <!-- </div> -->
                        </div>
                      

                    </div>
                </div>
              </div>
              <a class="weatherwidget-io" href="https://forecast7.com/en/n3d77114d81/tanah-laut-regency/" data-label_1="PERKIRAAN CUACA" 
                      data-label_2="KABUPATEN TANAH LAUT" data-days="3" data-theme="weather_one" >
                            PERKIRAAN CUACA KABUPATEN TANAH LAUT</a>
            </div>



            <div class="card card-primary card-outline">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                   
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-4 col-sm-6 col-12">
                            <div class="info-box bg-info">
                              <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

                              <div class="info-box-content">
                                <span class="info-box-text">Bookmarks</span>
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
                                <span class="info-box-text">Likes</span>
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
                                <span class="info-box-text">Events</span>
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
                          </div></div>
                      </div>
                      <div class="col-md-12">
                        <div class="row">
                        <marquee direction="" scrollamount="5" align="center">
                            <div class="callout callout-info">
                              <h5>I am an info callout!</h5>

                              <p>Follow the steps to continue to payment.</p>
                            </div>
                        </marquee>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="embed-responsive embed-responsive-4by3">
                        <video style="height: 100%; width: 100%" autoplay="" controls="">
                          <source src="<?php echo base_url() ?>file/videoplayback.mp4" type="video/mp4">
                        </video>
                          <!-- <iframe class="embed-responsive-item" autoplay src="<?php echo base_url() ?>file/videoplayback.mp4"></iframe> -->
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="col-md-6">
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
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
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

<script type="text/javascript">
		
		function showTime() {
		    var a_p = "";
		    var today = new Date();
		    var curr_hour = today.getHours();
		    var curr_minute = today.getMinutes();
		    var curr_second = today.getSeconds();
		    if (curr_hour < 12) {
		        a_p = "AM";
		    } else {
		        a_p = "PM";
		    }
		    if (curr_hour == 0) {
		        curr_hour = 12;
		    }
		    if (curr_hour > 12) {
		        curr_hour = curr_hour - 12;
		    }
		    curr_hour = checkTime(curr_hour);
		    curr_minute = checkTime(curr_minute);
		    curr_second = checkTime(curr_second);
		 document.getElementById('jam').innerHTML=curr_hour;
		 document.getElementById('menit').innerHTML=curr_minute;
		 document.getElementById('detik').innerHTML=curr_second + " " + a_p;
		    }

		function checkTime(i) {
		    if (i < 10) {
		        i = "0" + i;
		    }
		    return i;
		}
		setInterval(showTime, 500);
		//-->
		</script>

<script>
		!function(d,s,id){
		  var js,fjs=d.getElementsByTagName(s)[0];
			if(!d.getElementById(id)){
			  js=d.createElement(s);
			  js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';
			  fjs.parentNode.insertBefore(js,fjs);
		}
			}
		  (document,'script','weatherwidget-io-js');
		</script>
</body>
</html>
