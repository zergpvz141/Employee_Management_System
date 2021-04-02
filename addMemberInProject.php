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
            <h1 class="m-0 text-dark">Add Member</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="homePage.php">Home</a></li>
              <li class="breadcrumb-item"><a href="project.php">Project List</a></li>
              <li class="breadcrumb-item"><a  onclick="cancelFunction()" herf="#" id="navName">Project Name</a></li>
              <li class="breadcrumb-item active">Add Member</li>
            </ol>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid ">
        <div class="row justify-content-center">
          <div class="col-md-8">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">

                <h3 class="profile-username text-center" id="currentName">Project Name</h3><br>

                <form method="POST">
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Employee ID </b>(3 digits) <input type="text" name="empID" id="empID">
                    </li>
                  </ul>
                  <li class="list-group">
                    <button onclick="saveFunction()" name="save" id="save"class="btn btn-success btn-block"><b>Add</b></button>
                    <a href="#" onclick="cancelFunction()" id="cancel" class="btn btn-danger btn-block"><b>Cancel</b></a>
                  </li>
                </form>
              </div>
              <!-- /.card-body -->
            </div>

    </section>
    <!-- /.content -->
  </div>
</div>

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
<script src="dist/js/tableFunction.js"></script>
<script>
  $(function () {
    $("#DepartmentList").DataTable({
      "responsive": true,
      "autoWidth": false,
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
  setCurrentName();
</script>
<!-- ./wrapper -->
<?php
require ('checkFunction.php');
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
  $url = "https://";
else
  $url = "http://";
$url.= $_SERVER['HTTP_HOST'];
$url.= $_SERVER['REQUEST_URI'];
$url_components = parse_url($url);
parse_str($url_components['query'], $params);
$projName = $params['projectName'];
$projNo = $params['projectID'];


$con = mysqli_connect("localhost", "root", "root", "emdb");
$resultList = getCheckResultList($con,"Select empID FROM employee WHERE proNo is not null");
$empList = getCheckResultList($con,"Select empID FROM employee");
if(isset($_POST['save']) and notEmptyCheck($_POST['empID'],"Employee ID") and lengthCheck($_POST['empID'],3) and empDuplicateCheck($_POST['empID'],"empID",$resultList) and arrayNotInCheck($_POST['empID'],"empID",$empList)) {
  insertDepartment();
}
function insertDepartment()
{
  global $con;
  if (!$con) {
    die("connection failed:" . mysqli_connect_errno());
  }
  global $projNo;
  $empID = mysqli_real_escape_string($con, $_POST['empID']);
  $queryString = "UPDATE employee SET proNo = '$projNo' WHERE empID = '$empID'";
  if (mysqli_query($con, $queryString)) {
    echo "<script type='text/javascript'>alert('Records added successfully.');</script>";
  } else {
    echo "ERROR: Could not able to execute $queryString. " . mysqli_error($con);
  }
}
?>
<script>
  var infoList = ["empID"];
  var attList = getDomValue();
  var DOMList = attList[0];
  var oldDOMValue = attList[1];

  var urlParams = decodeURIComponent(window.location.search).substring(1);
  var pass_name = urlParams.split("&")[0].split("=")[1];
  var pass_id = urlParams.split("&")[1].split("=")[1];
  document.getElementById("save").setAttribute("href", "projectInfo.php"+projNameUrl(pass_name,pass_id));
  document.getElementById("cancel").setAttribute("href", "projectInfo.php"+projNameUrl(pass_name,pass_id));

  for (var i = 0; i < DOMList.length; i++){
    editable(DOMList[i]);
  }
  function getDomValue(){
    var arrDom;
    var domList =[];
    var oldDomValue =[];
    for(var i = 0; i< infoList.length; i++){
      arrDom =document.getElementById(infoList[i]);
      arrDom.classList.add("float-right", "border-0", "text-right");
      domList.push(arrDom);
      oldDomValue.push(arrDom.textContent);
    }
    return [domList,oldDomValue];
  }
  function saveFunction() {
    for (var i = 0; i < DOMList.length; i++){
      editableFalse(DOMList[i]);
    }
    var urlParams = decodeURIComponent(window.location.search).substring(1);
    var pass_name = urlParams.split("&")[0].split("=")[1];
    var pass_id = urlParams.split("&")[1].split("=")[1];
    window.location="projectInfo.php"+ projNameUrl(pass_name,pass_id);
  }
  function cancelFunction() {
    for (var i = 0; i < DOMList.length; i++){
      //console.log(oldDOMValue[i]);
      DOMList[i].textContent = oldDOMValue[i];
    }
  }
  function editable(content){
    content.contentEditable ="true";
    content.style.backgroundColor = "#FCD9D9";
  }
  function editableFalse(content){
    content.contentEditable ="false";
    content.style.backgroundColor = "";
  }
</script>
</body>
</html>
