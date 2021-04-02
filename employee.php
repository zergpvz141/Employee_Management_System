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
              <i class="nav-icon fas fa-building"></i>
              <p>
                Departments
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="employee.php" class="nav-link active">
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
            <h1 class="m-0 text-dark">Employee List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="homePage.php">Home</a></li>
              <li class="breadcrumb-item active">Employee List</li>
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
                  <th>ID#</th>
                  <th>Name</th>
                  <th>Department</th>
                  <th>Position</th>
                  <th>Salary</th>
                  <th>Fire!</th>
                </tr>
                </thead>
                <tbody id="ListBody">

                </tbody>
                <tfoot>
                <tr>
                  <th>ID#</th>
                  <th>Name</th>
                  <th>Department</th>
                  <th>Position</th>
                  <th>Salary</th>
                  <th>Fire!</th>
                </tr>
                </tfoot>
              </table>
              </form>
                <br>
              <a href="addEmployee.php" id="edit" class="btn btn-primary btn-block"><b>Add Employee in Employee List</b></a>
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
  <script src="dist/in/employee.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <script src="dist/js/tableFunction.js"></script>
  <!-- page script -->
<?php
$con=mysqli_connect("localhost","root","root","emdb");
if(!$con)
{
  die("connection failed:".mysqli_connect_errno());
}
$result=mysqli_query($con,"SELECT DISTINCT(e.empID),e.ename,d.depNo,d.depName,po.postName,po.postNo,e.proNo,s.total_amount FROM employee e, department d,post po,project pr, salary s WHERE e.depNo=d.depNo AND e.postNo=po.postNo AND s.empID=e.empID AND (e.prono=pr.projno OR e.prono is null) 
                        UNION SELECT DISTINCT(e.empID),e.ename,d.depNo,d.depName,po.postName,po.postNo,e.proNo,'' FROM employee e, department d,post po,project pr, salary s WHERE e.depNo=d.depNo AND e.postNo=po.postNo AND e.empID ='001' and (e.prono=pr.projno OR e.prono is null) 
                        ORDER BY empid;");
$data = array();
while ($row = mysqli_fetch_array($result)) {
  $data[] = $row;
}
if(isset($_POST)and array_keys($_POST)[0] != '' and $_POST[array_keys($_POST)[1]] =="delete"){
  $deleteID = mysqli_real_escape_string($con, array_keys($_POST)[1]);
  $queryString3 = "DELETE FROM employee WHERE empID = '$deleteID'";
  $deleteSalary = "DELETE FROM salary WHERE empID = '$deleteID'";
  if (mysqli_query($con, $queryString3) and mysqli_query($con, $deleteSalary)) {
    echo "<meta http-equiv='refresh' content='0.3;'> ";
  } else {
    echo "ERROR: Could not able to execute $queryString. " . mysqli_error($con);
  }
}
?>
<div style="display: none;"><?php var_dump( $data ); ?></div>
  <script>
  $(function () {
    $("#DepartmentList").DataTable({
      "responsive": true,
      "autoWidth": false,
      "paging": true,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });

  function employeeContent(_name){
    var table = document.getElementById(_name);
    var alphabet = <?php echo json_encode($data);?>;
    for(var i=0; i<alphabet.length; i++){
      var row = table.insertRow(i);
      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(1);
      var cell3 = row.insertCell(2);
      var cell4 = row.insertCell(3);
      var cell5 = row.insertCell(4);

      var v1 = alphabet[i].empID;
      var v2 = alphabet[i].ename;
      var v3 = alphabet[i].depName;
      var v5 = alphabet[i].depNo;
      var v4 = alphabet[i].postName;
      var v6 = add0(alphabet[i].postNo);

      var pass_personName = personNameUrl(v2,v1);
      var pass_depName = depNameUrl(v3,v5);
      var pass_positionName = postNameUrl(v4,v6);

      var x1 = document.createElement("A");
      var t1 = document.createTextNode(v1);
      x1.setAttribute("href", "personInfo.php"+pass_personName);
      x1.appendChild(t1);
      cell1.appendChild(x1);

      var x2 = document.createElement("A");
      var t2 = document.createTextNode(v2);
      x2.setAttribute("href", "personInfo.php"+pass_personName);
      x2.appendChild(t2);
      cell2.appendChild(x2);

      var x3 = document.createElement("A");
      var t3 = document.createTextNode(v3);
      x3.setAttribute("href", "department.php"+pass_depName);
      x3.appendChild(t3);
      cell3.appendChild(x3);

      var x4 = document.createElement("A");
      var t4 = document.createTextNode(v4);
      x4.setAttribute("href", "position.php"+pass_positionName);
      x4.appendChild(t4);
      cell4.appendChild(x4);


      var x5 = document.createElement("A");
      var t5 = document.createTextNode(alphabet[i].total_amount);
      x5.appendChild(t5);
      cell5.appendChild(x5);
      if(v1 != '001') {
        deleteButton(row, 5, v1);
      }else{
        un_deleteButton(row, 5, v1);
      }
    }
  }
  employeeContent("ListBody");
  </script>
  </body>
  </html>
