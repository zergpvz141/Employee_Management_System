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
            <h1 class="m-0 text-dark">Add Employee</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="homePage.php">Home</a></li>
                <li class="breadcrumb-item"><a href="employee.php">Employee List</a></li>
              <li class="breadcrumb-item active">Add Employee</li>
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

                <h3 class="profile-username text-center">Employee Infomation</h3><br>

                <form method="POST">
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Employee Name</b> <input type="text" name="empName" id="empName" required>
                    </li>
                    <li class="list-group-item">
                      <b>Employee ID </b>(3 digits) <input type="text" name="empID" id="empID" required>
                    </li>
                    <li class="list-group-item">
                      <b>Department ID </b>(3 digits) <input type="text" name="depID" id="depID" required>
                    </li>
                    <li class="list-group-item">
                      <b>Position Number </b>(3 digits) <input type="text" name="postNo" id="postNo" required>
                    </li>
                    <li class="list-group-item">
                      <b>SSN </b>(8 digits) <input type="text" name="ssn" id="ssn" required>
                    </li>
                    <li class="list-group-item">
                      <b>Gender </b>(M:Male, F: Female, B: both, U: Undecided) <input type="text" name="gender" id="gender" required>
                    </li>
                    <li class="list-group-item">
                      <b>Phone Number </b>(10 digits) <input type="text" name="phone" id="phone" >
                    </li>
                  </ul>
                  <li class="list-group">
                    <button type="submit" onclick="saveFunction()" id="save" name="save" class="btn btn-success btn-block"><b>Add</b></button>
                    <a href="employee.php" onclick="cancelFunction()" id="cancel" class="btn btn-danger btn-block"><b>Cancel</b></a>
                  </li>
                </form>
              </div>
              <!-- /.card-body -->
            </div>

    </section>
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->

<script src="dist/js/tableFunction.js"></script>

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
<?php
require ('checkFunction.php');
$con = mysqli_connect("localhost", "root", "root", "emdb");
$empResult=getCheckResultList($con,"SELECT empID, SSN FROM employee");
$depResult=getCheckResultList($con,"SELECT depNo FROM department");
$postResult=getCheckResultList($con,"SELECT postNo FROM post");
if(isset($_POST['save']) and arrayDuplicateCheck($_POST['empID'],"empID",$empResult) and notEmptyCheck($_POST['empID'],"Employee ID") and notEmptyCheck($_POST['phone'],"Phone number") and arrayNotInCheck($_POST['depID'],"depNo",$depResult)
                        and arrayNotInCheck($_POST['postNo'],"postNo",$postResult) and arrayDuplicateCheck($_POST['ssn'],"SSN",$empResult)
                        and lengthCheck($_POST['empID'],3) and lengthCheck($_POST['ssn'],8)
                        and lengthCheck($_POST['depID'],3) and lengthCheck($_POST['postNo'],3)
                        and lengthCheck($_POST['phone'],10) and genderCheck($_POST['gender'])) {
  insertDepartment();
}
function insertDepartment()
{
  global $con;
  if (!$con) {
    die("connection failed:" . mysqli_connect_errno());
  }
  $empName = mysqli_real_escape_string($con, $_POST['empName']);
  $empID = mysqli_real_escape_string($con, $_POST['empID']);
  $depID = mysqli_real_escape_string($con, $_POST['depID']);
  $postNo = mysqli_real_escape_string($con, $_POST['postNo']);
  $ssn = mysqli_real_escape_string($con, $_POST['ssn']);
  $enroll_time = mysqli_real_escape_string($con, date("Y-m-d"));
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $queryString = "INSERT INTO employee (empID, ename,depNo,postNo,SSN,enroll_time,gender,phone) VALUES ('$empID','$empName','$depID','$postNo','$ssn',NULLIF('$enroll_time',''),'$gender','$phone')";
  $salaryString = "INSERT INTO salary(empID,total_amount) VALUES ($empID,0)";
  if (mysqli_query($con, $queryString) and mysqli_query($con, $salaryString)) {
    echo "<script type='text/javascript'>alert('Records added successfully.');</script>";
  } else {
    echo "ERROR: Could not able to execute $queryString. " . mysqli_error($con);
  }
}
?>

<script>

  var infoList = ["empName","empID","depID","postNo","ssn","gender","phone"];
  var attList = getDomValue();
  var DOMList = attList[0];
  var oldDOMValue = attList[1];
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
