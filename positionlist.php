<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Employee Management System</title>
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
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
            <a href="project.php" class="nav-link ">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
                Projects
              </p>
            </a>

          </li>

          <li class="nav-item has-treeview">
            <a href="positionlist.php" class="nav-link active">
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
            <h1 class="m-0 text-dark">Position List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="homePage.php">Home</a></li>
              <li class="breadcrumb-item active">Position List</li>
            </ol>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">

            <!-- /.card-header -->
            <div class="card-body">
              <form method="POST">
              <table id="DepartmentList" class="table table-bordered table-striped text-center">
                <thead>
                <tr>
                  <th>Position ID</th>
                  <th>Position Title</th>
                  <th>Delete Position</th>
                </tr>
                </thead>
                <tbody id="ListBody">

                </tbody>
                <tfoot>
                <tr>
                  <th>Position ID</th>
                  <th>Position Title</th>
                  <th>Delete Position</th>
                </tr>
                </tfoot>
              </table>
              </form>
                <a href="addPosition.php" id="edit" class="btn btn-primary btn-block"><b>Add Position in Position List</b></a>
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

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <script src="dist/in/post.js"></script>
  <script src="dist/js/tableFunction.js"></script>
<?php
$con=mysqli_connect("localhost","root","root","emdb");
if(!$con)
{
  die("connection failed:".mysqli_connect_errno());
}
$result=mysqli_query($con,"SELECT p.postNo, p.postName FROM post p;");
$data = array();
while ($row = mysqli_fetch_array($result)) {
  $data[] = $row;
}
if(isset($_POST)and array_keys($_POST)[0] != '' and $_POST[array_keys($_POST)[1]] =="delete"){
  $deleteID = mysqli_real_escape_string($con, array_keys($_POST)[1]);
  $queryString3 = "DELETE FROM post WHERE postNo = '$deleteID'";
  $deletePersonPost = "UPDATE employee SET proNo = '015' WHERE proNo = '$deleteID'";
  if (mysqli_query($con, $queryString3)) {
    print_r($queryString3);
    echo "<meta http-equiv='refresh' content='0.3;'> ";
  } else {
    echo "ERROR: Could not able to execute $queryString. " . mysqli_error($con);
  }
}
?>
<div style="display: none;"><?php var_dump( $data ); ?></div>
  <!-- page script -->
<script>
  $(function () {
    $("#DepartmentList").DataTable({
      "responsive": true,
      "autoWidth": false,
      "paging": true,
      "lengthChange": true,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false,
    });
  });
  function positionContent(_name){
    var table = document.getElementById(_name);
    var alphabet = <?php echo json_encode($data);?>;
    for(var i=0; i<alphabet.length; i++){
      var row = table.insertRow(i);
      var cell = row.insertCell(0);
      var cell1 = row.insertCell(1);


      var v1 = alphabet[i].postNo;
      var v2 = alphabet[i].postName;

      var pass_postName = postNameUrl(v2,v1);

      var x = document.createElement("A");
      var t = document.createTextNode(alphabet[i].postNo);
      x.setAttribute("href", "position.php"+pass_postName);
      x.appendChild(t);
      cell.appendChild(x);

      var x1 = document.createElement("A");
      var t1 = document.createTextNode(alphabet[i].postName);
      x1.setAttribute("href", "position.php"+pass_postName);
      x1.appendChild(t1);
      cell1.appendChild(x1);
      if(v1 != 15) {
        deleteButton(row, 2, v1);
      }else{
        un_deleteButton(row, 2, v1);
      }
    }
  }
  positionContent("ListBody");

  </script>
  </body>
  </html>
