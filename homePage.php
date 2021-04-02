<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Employee Management System</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="../plugins/fullcalendar/main.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar-daygrid/main.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar-timegrid/main.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar-bootstrap/main.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    .table-style .today {background: #2A3F54; color: #ffffff;}
    .table-style th:nth-of-type(7),td:nth-of-type(7) {color: blue;}
    .table-style th:nth-of-type(1),td:nth-of-type(1) {color: #ff0000;}
    .table-style tr:first-child th{background-color:#F6F6F6; text-align:center; font-size: 15px;}
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="homePage.php" class="nav-link">Employee Management System</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="homePage.php" class="brand-link">
      <span class="brand-text font-weight-light">EMS</span>
    </a>

    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-header">Navigation</li>

          <li class="nav-item has-treeview">
            <a href="departmentList.php" class="nav-link">
              <i class="nav-icon fas fa-building"> </i>
              <p>
                Departments
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="employee.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Employees
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="project.php" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
                Projects
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="positionlist.php" class="nav-link">
              <i class="nav-icon fas fa-glasses"></i>
              <p>
                Positions
              </p>
            </a>
          </li>
      </nav>
    </div>
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Welcome Back!</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid ">
        <div class="row align-items-center justify-content-center">
          <div class="row">
            <div class=" col ">
              <div><br><br><br><br></div>
              <iframe src="http://free.timeanddate.com/clock/i79qvoff/n422/szw210/szh210/hocfff/hbw0/cf100/hgr0/fas20/fac34495e/fdi86/mqc000/mqs2/mql3/mqw4/mqd70/mhc000/mhs2/mhl3/mhw4/mhd70/mmv0/hhs3/hms3" frameborder="0" width="210" height="210"></iframe>
            </div>
              <div class="col">
                <svg width="800" height="600" preserveAspectRatio="xMinYMin meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <svg>
                    <rect x="10" y="10" height="377" width="640" style="fill: #85C1E9;" />
                    <rect x="30" y="70" rx="5" ry="5" height="33" width="600" style="fill: #5499C7" />
                    <text id="month_name" x="300" y="50" fill="#ffffff" style="font-size:22px; font-family: Arial; font-weight:bold;"></text>
                    <rect x="45" y="159" rx="5" ry="5" height="33" width="40" style="fill: #5499C7" />
                    <svg x="10" y="70">
                      <g>
                        <text x="35" y="24" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">SUN</text>
                        <text x="126" y="24" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">MON</text>
                        <text x="216" y="24" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">TUE</text>
                        <text x="304" y="24" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">WED</text>
                        <text x="396" y="24" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">THU</text>
                        <text x="473" y="24" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">FRI</text>
                        <text x="560" y="24" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">SAT</text>
                      </g>
                    </svg>
                    <svg x="10" y="120">
                      <g>
                        <text x="49" y="24" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;"></text>
                        <text x="141" y="24" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;"></text>
                        <text x="230" y="24" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;"></text>
                        <text x="317" y="24" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;"></text>
                        <text x="405" y="24" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;"></text>
                        <text x="482" y="24" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">1</text>
                        <text x="577" y="24" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">2</text>
                      </g>
                      <g>
                        <text x="50" y="63" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">3</text>
                        <text x="141" y="63" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">4</text>
                        <text x="229" y="63" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">5</text>
                        <text x="315" y="63" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">6</text>
                        <text x="405" y="63" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">7</text>
                        <text x="482" y="63" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">8</text>
                        <text x="577" y="63" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">9</text>
                      </g>
                      <g>
                        <text x="43" y="104" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">10</text>
                        <text x="134" y="104" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">11</text>
                        <text x="221" y="104" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">12</text>
                        <text x="309" y="104" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">13</text>
                        <text x="399" y="104" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">14</text>
                        <text x="477" y="104" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">15</text>
                        <text x="571" y="104" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">16</text>
                      </g>
                      <g>
                        <text x="43" y="145" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">17</text>
                        <text x="134" y="145" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">18</text>
                        <text x="221" y="145" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">19</text>
                        <text x="309" y="145" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">20</text>
                        <text x="399" y="145" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">21</text>
                        <text x="477" y="145" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">22</text>
                        <text x="571" y="145" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">23</text>
                      </g>
                      <g>
                        <text x="43" y="186" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">24</text>
                        <text x="134" y="186" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">25</text>
                        <text x="221" y="186" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">26</text>
                        <text x="309" y="186" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">27</text>
                        <text x="399" y="186" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">28</text>
                        <text x="477" y="186" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">29</text>
                        <text x="571" y="186" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">30</text>
                      </g>
                      <g>
                        <text x="43" y="227" style="fill: #ffffff; font-size:20px; font-family: Arial; font-weight:bold;">31</text>
                      </g>
                    </svg>
                  </svg>

                </svg>
          </div>
            <div class="w-100"></div>
              <div class="col">
                <div class="card card-warning">
                  <div class="card-header">
                    <h3 class="card-title">Notice</h3>

                    <div class="card-tools">
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <ul>
                      <li>Meeting today at 3:30pm</li>
                    </ul>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>






            <!-- /.col -->
        </div>
      </div>
    </section>
    <!-- /.content -->
</div>

</body>

</html>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/fullcalendar/main.min.js"></script>
<script src="plugins/fullcalendar-daygrid/main.min.js"></script>
<script src="plugins/fullcalendar-timegrid/main.min.js"></script>
<script src="plugins/fullcalendar-interaction/main.min.js"></script>
<script src="plugins/fullcalendar-bootstrap/main.min.js"></script>
<script>
  window.onload = function() {
    showMonth();
  };

  function showMonth() {
    var month = new Array();
    month[0] = "January";
    month[1] = "February";
    month[2] = "March";
    month[3] = "April";
    month[4] = "May";
    month[5] = "June";
    month[6] = "July";
    month[7] = "August";
    month[8] = "September";
    month[9] = "October";
    month[10] = "November";
    month[11] = "December";
    var d = new Date();
    var n = month[d.getMonth()];
    document.getElementById("month_name").innerHTML = n;
  }
</script>
<script>
  $(document).ready(function() {
    setInterval( function() {
      var hours = new Date().getHours();
      $(".hours").html(( hours < 10 ? "0" : "" ) + hours);
    }, 1000);
    setInterval( function() {
      var minutes = new Date().getMinutes();
      $(".min").html(( minutes < 10 ? "0" : "" ) + minutes);
    },1000);
    setInterval( function() {
      var seconds = new Date().getSeconds();
      $(".sec").html(( seconds < 10 ? "0" : "" ) + seconds);
    },1000);
  });
</script>
