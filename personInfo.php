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
        <a class="nav-link" data-widget="pushmenu" href="homePage.php" role="button"><i class="fas fa-bars"></i></a>
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
            <h1 class="m-0 text-dark">Personal Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="homePage.php">Home</a></li>
                <li class="breadcrumb-item"><a href="employee.php">Employee List</a></li>
              <li class="breadcrumb-item active" id="navName">User Name</li>
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
          <div class="col-md-6">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img id="photo" class="profile-user-img img-fluid img-circle"
                       src="dist/img/avatar5.png"
                       alt="User profile picture">
                  <h3 id="currentName">Songtao Wei</h3>
                </div>
                <br>
                <form method="POST">
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Employee ID </b>(3 digits) <input id="empID" name="empID" class="float-right" required>
                    </li>
                    <li class="list-group-item">
                      <b>Employee Name</b> <input id="ename"  name="ename" required>
                    </li>
                    <li class="list-group-item">
                      <b>Department Name</b> <input id="depName" name="depName" class="float-right" required>
                    </li>
                    <li class="list-group-item">
                      <b>Position Name</b> <input id="postName" name="postName" class="float-right" required>
                    </li>
                    <li class="list-group-item">
                      <b>Salary</b> <input id="salary" name="salary" class="float-right" required>
                    </li>
                    <li class="list-group-item">
                      <b>Social Security Number </b>(8 digits) <input id="SSN" name="SSN" class="float-right" required>
                    </li>
                    <li class="list-group-item">
                      <b>Enroll Time </b>(yyyy-mm-dd) <input id="enroll_time" name="enroll_time" class="float-right" required>
                    </li>
                    <li class="list-group-item">
                      <b>Gender </b>(M:Male, F: Female, B for both, U: Undecided)<input id="gender" name="gender" class="float-right" required>
                    </li>
                    <li class="list-group-item">
                      <b>Date of Birth </b>(yyyy-mm-dd) <input id="dob" name="dob" class="float-right" >
                    </li>
                    <li class="list-group-item">
                      <b>Phone Number </b>(10 digits) <input id="phone" name="phone" class="float-right">
                    </li>
                    <li class="list-group-item">
                      <b>Email</b> <input id="email" name="email" class="float-right">
                    </li>
                    <li class="list-group-item">
                      <b>Address</b> <input id="address" name="address" class="float-right">
                    </li>
                  </ul>
                  <li class="list-group">
                    <a href="#" onclick="editFunction()" id="edit" class="btn btn-primary btn-block"><b>Edit</b></a>
                    <button  type="submit" onclick="saveFunction()" name="save" id="save"class="btn btn-success btn-block"style="display:none"><b>Save</b></button>
                    <a href="#" onclick="cancelFunction()" id="cancel" class="btn btn-danger btn-block"style="display:none"><b>Cancel</b></a>
                  </li>
                </form>
              </div>
              <!-- /.card-body -->
            </div>

    </section>
    <!-- /.content -->
  </div>
</div>
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
<script>
  setCurrentName();
</script>
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
$personID = $params['personID'];
$con=mysqli_connect("localhost","root","root","emdb");
if(!$con)
{
  die("connection failed:".mysqli_connect_errno());
}
$queryString = "SELECT e.empID, e.ename, d.depNo, p.postName,d.depName,p.postNo, s.total_amount as salary, SSN, enroll_time, gender, dob, phone, email ,address FROM employee e, department d, post p, salary s WHERE e.empID = '$personID' and e.depNo = d.depNo and e.postNo = p.postNo and e.empID = s.empID
                UNION SELECT e.empID, e.ename, d.depNo, p.postName,d.depName,p.postNo, '' as salary, SSN, enroll_time, gender, dob, phone, email ,address FROM employee e, department d, post p WHERE e.empID = '$personID' and e.depNo = d.depNo and e.postNo = p.postNo";
$result=mysqli_query($con,$queryString);
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}
$empID = $_POST['empID'];
$ename = $_POST['ename'];
$depName = $_POST['depName'];
$postName = $_POST['postName'];
$salary = $_POST['salary'];
$SSN = $_POST['SSN'];
$enroll_time = $_POST['enroll_time'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$empResult=getCheckResultList($con,"SELECT empID, SSN FROM employee");
$depResult=getCheckResultList($con,"SELECT depNo,depName FROM department");
$postResult=getCheckResultList($con,"SELECT postNo,postName FROM post");
if(isset($_POST['save']) and notEmptyCheck($_POST['ename'],"Employee name") and notEmptyCheck($_POST['depName'],"Department name")
  and notEmptyCheck($_POST['postName'],"Position name") and notEmptyCheck($_POST['phone'],"Phone number")
  and arrayNotInCheck($_POST['depName'],"depName",$depResult)
  and arrayNotInCheck($_POST['postName'],"postName",$postResult)
  and lengthCheck($_POST['SSN'],8) and dateCheck($_POST['enroll_time']) and intCheck($_POST['salary'])and dateCheck($_POST['dob'])
  and lengthCheck($_POST['phone'],10) and genderCheck($_POST['gender'])) {
  $depNoResult=mysqli_query($con,"SELECT depNo from department WHERE depName = '$depName' ");
  $depNoData = array();
  while ($row1 = mysqli_fetch_assoc($depNoResult)) {
    $depNoData[] = $row1;
  }
  $getDepNo = $depNoData[0]['depNo'];
  $postNoResult=mysqli_query($con,"SELECT postNo from post WHERE postName = '$postName' ");
  $postData = array();
  while ($row2 = mysqli_fetch_assoc($postNoResult)) {
    $postData[] = $row2;
  }
  $empID = $_POST['empID'];
  $ename = $_POST['ename'];
  $depName = $_POST['depName'];
  $postName = $_POST['postName'];
  $salary = $_POST['salary'];
  $SSN = $_POST['SSN'];
  $enroll_time = $_POST['enroll_time'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $getPostNo = $postData[0]['postNo'];
  if($enroll_time != '') {
    $upempInfo = "UPDATE employee e SET e.ename = '$ename',e.depNo ='$getDepNo',e.postNo ='$getPostNo',e.SSN ='$SSN',e.enroll_time=NULLIF('$enroll_time',''),e.gender='$gender',e.dob=NULLIF('$dob',''),e.email='$email',e.phone='$phone', e.address= '$address' WHERE e.empID = '$empID' ";
  }else{
    $upempInfo = "UPDATE employee e SET e.ename = '$ename',e.depNo ='$getDepNo',e.postNo ='$getPostNo',e.SSN ='$SSN',e.gender='$gender',e.dob=NULLIF('$dob',''),e.email='$email',e.phone='$phone', e.address= '$address' WHERE e.empID = '$empID' ";

  }
  $upsalaryInfo ="UPDATE salary SET total_amount ='$salary' WHERE empID = '$empID'";

  if (mysqli_query($con, $upempInfo) and mysqli_query($con, $upsalaryInfo)) {
    echo "<meta http-equiv='refresh' content='0.3;'> ";
  } else {
    echo "ERROR: Could not able to execute $upempInfo ||" . mysqli_error($con);
  }
}
?>
<div style="display: none;"><?php var_dump( $data ); ?></div>
<!-- ./wrapper -->
<script>
var infoList = ["empID","ename","depName","postName",'salary',"SSN","enroll_time","gender","dob","email","phone","address"];
var infoValueList =<?php echo json_encode($data);?>;
infoValueList = infoValueList[0];
if(infoValueList.gender == "M"){
  document.getElementById("photo").src="dist/img/avatar5.png";
}else if(infoValueList.gender == "F"){
  document.getElementById("photo").src="dist/img/avatar2.png";
}else if(infoValueList.gender == "U"){
  document.getElementById("photo").src="dist/img/question.png";
}else if(infoValueList.gender == "B"){
  document.getElementById("photo").src="dist/img/both.png";
}
var attList = getDomValue();
var DOMList = attList[0];
var oldDOMValue = attList[1];
function getDomValue(){
  var arrDom;
  var domList =[];
  var oldDomValue =[];
  for(var i = 0; i< infoList.length; i++){
    arrDom =document.getElementById(infoList[i]);
    arrDom.classList.add("float-right", "border-0", "text-right");
    arrDom.value =infoValueList[infoList[i]];
    arrDom.readOnly =true;
    domList.push(arrDom);
    oldDomValue.push(arrDom.textContent);
  }
  return [domList,oldDomValue];
}
function editFunction() {
  document.getElementById("edit").style.display = "none";
  document.getElementById("save").style.display = "inline";
  document.getElementById("cancel").style.display = "inline";
  for (var i = 0; i < DOMList.length; i++){
    editable(DOMList[i],i);
  }
}
function saveFunction() {
  for (var i = 0; i < DOMList.length; i++){
    editableFalse(DOMList[i]);
  }
}
function cancelFunction() {
  for (var i = 0; i < DOMList.length; i++){
    editableFalse(DOMList[i]);
    //console.log(oldDOMValue[i]);
    DOMList[i].textContent = oldDOMValue[i];
  }
  document.getElementById("edit").style.display = "inline";
  document.getElementById("save").style.display = "none";
  document.getElementById("cancel").style.display = "none";
}
function editable(content,i){
  if(i == 0){
    content.readOnly =true;
  }else{
    content.readOnly =false;
    content.style.backgroundColor = "#FCD9D9";
  }
}
function editableFalse(content){
  content.readOnly =true;
  content.style.backgroundColor = "";
}
</script>

</body>
</html>
