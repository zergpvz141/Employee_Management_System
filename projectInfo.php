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
            <a href="project.php" class="nav-link active">
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
            <h1 class="m-0 text-dark">Project Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="homePage.php">Home</a></li>
                <li class="breadcrumb-item"><a href="project.php">Project List</a></li>
              <li class="breadcrumb-item active" id="navName">Project Name</li>
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
          <div class="col-md-10">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                </div>

                <h3 class="profile-username text-center" id="currentName">Purchase Materials</h3>
                <p id="projLeader" class="text-muted text-center">Project Leader: </p>
                <form method="POST">
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Start Time: </b><input type="text" name="begin_time" id="begin_time" class="float-right">
                    </li>
                    <li class="list-group-item">
                      <b>End Time: </b><input type="text" name="end_time" id="end_time" class="float-right">
                    </li>
                  </ul>
                  <li class="list-group">
                    <a href="#" onclick="editFunction()" id="edit" class="btn btn-primary btn-block"><b>Edit Time</b></a>
                    <button type="submit" onclick="saveFunction()" name="save" id="save"class="btn btn-success btn-block"style="display:none"><b>Save</b></button>
                    <a href="#" onclick="cancelFunction()" id="cancel" class="btn btn-danger btn-block"style="display:none"><b>Cancel</b></a>
                  </li>
                </form>
                <br>

                <a id="add" class="btn btn-primary btn-block"><b>Add Member</b></a>
                <br>
                <div class="row">
                  <div class="col-12">
                    <form method="POST">
                      <!-- /.card-header -->
                        <table id="DepartmentList" class="table table-bordered table-striped text-center">
                          <thead>
                          <tr>
                            <th>Employee ID</th>
                            <th>Member</th>
                            <th>Assign Leader</th>
                            <th>Remove Member</th>
                          </tr>
                          </thead>
                          <tbody id="ListBody">

                          </tbody>
                          <tfoot>
                          </tfoot>
                        </table>
                    </form>

                  </div>
                  <!-- /.col -->
                </div>
              </div>
              <!-- /.card-body -->
            </div>

    </section>
    <!-- /.content -->
  </div>
</div>
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
<script src="dist/in/departmentList.js"></script>
<script src="dist/js/tableFunction.js"></script>

<script src="plugins/jquery/jquery.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
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
$projectID = $params['projectID'];
$con=mysqli_connect("localhost","root","root","emdb");
if(!$con)
{
  die("connection failed:".mysqli_connect_errno());
}
$queryString = "Select e.empID, e.ename from employee e where e.proNo = '$projectID'";
$result=mysqli_query($con,$queryString);
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}
$queryString2 = "Select e.empID, e.ename from employee e, project p where p.projNo = '$projectID' and e.empID = p.projManager";
$result2=mysqli_query($con,$queryString2);
$leader = array();
while ($row2 = mysqli_fetch_assoc($result2)) {
  $leader[] = $row2;
}

if(isset($_POST)and array_keys($_POST)[0] != '' and $_POST[array_keys($_POST)[1]] =="leader"){
  $leaderID = mysqli_real_escape_string($con, array_keys($_POST)[1]);
  $queryString3 = "UPDATE project SET projManager = '$leaderID' where projNo = '$projectID'";
  if (mysqli_query($con, $queryString3)) {
    echo "<meta http-equiv='refresh' content='0.3;'> ";
  } else {
    echo "ERROR: Could not able to execute $queryString3. " . mysqli_error($con);
  }
}
if(isset($_POST)and array_keys($_POST)[0] != '' and $_POST[array_keys($_POST)[1]] =="delete"){
  $deleteID = mysqli_real_escape_string($con, array_keys($_POST)[1]);
  if($deleteID != $leader[0][empID]) {
    $queryString4 = "UPDATE employee SET proNo = null WHERE empID = '$deleteID'";
    if (mysqli_query($con, $queryString4)) {
      echo "<meta http-equiv='refresh' content='0.2;'> ";
    } else {
      echo "ERROR: Could not able to execute $queryString4. " . mysqli_error($con);
    }
  }
  else{
      $queryString4 = "UPDATE employee SET proNo = null WHERE empID = '$deleteID'";
      $queryString5 = "UPDATE project SET projManager = null WHERE projNo = '$projectID'";
      if (mysqli_query($con, $queryString4) and mysqli_query($con, $queryString5)) {
        echo "<meta http-equiv='refresh' content='0.2;'> ";
      } else {
        echo "ERROR: Could not able to execute $queryString4. " . mysqli_error($con);
      }
    }
}
$timeList = getCheckResultList($con,"SELECT begin_time, end_time FROM project WHERE projNo = '$projectID'");

if(isset($_POST['save']) and dateCheck_noEmpty($_POST['begin_time']) and dateCheck($_POST['end_time']) and dateBeforeCheck($_POST['begin_time'],$_POST['end_time'])){
  $sTime = $_POST['begin_time'];
  $eTime = $_POST['end_time'];
  $timeQuery = "UPDATE project SET begin_time ='$sTime', end_time= NULLIF('$eTime','') WHERE projNo = '$projectID'";
  if (mysqli_query($con,$timeQuery )) {
    echo "<meta http-equiv='refresh' content='0.3;'> ";
  } else {
    echo "ERROR: Could not able to execute $timeQuery ||" . mysqli_error($con);
  }
}
?>
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
setCurrentName();
var infoList = ["begin_time","end_time"];
var infoValueList =<?php echo json_encode($timeList);?>;
infoValueList = infoValueList[0];
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
    oldDomValue.push(arrDom.value);
  }
  return [domList,oldDomValue];
}
function editFunction() {
  document.getElementById("edit").style.display = "none";
  document.getElementById("save").style.display = "inline";
  document.getElementById("cancel").style.display = "inline";
  for (var i = 0; i < DOMList.length; i++){
    editable(DOMList[i]);
  }
}
function saveFunction() {
  document.getElementById("edit").style.display = "inline";
  document.getElementById("save").style.display = "none";
  document.getElementById("cancel").style.display = "none";
  for (var i = 0; i < DOMList.length; i++){
    editableFalse(DOMList[i]);
  }
}
function cancelFunction() {
  document.getElementById("edit").style.display = "inline";
  document.getElementById("save").style.display = "none";
  document.getElementById("cancel").style.display = "none";
  for (var i = 0; i < DOMList.length; i++){
    editableFalse(DOMList[i]);
    console.log(oldDOMValue);
    DOMList[i].value = oldDOMValue[i];
  }
}
function editable(content){
    content.readOnly =false;
    content.style.backgroundColor = "#FCD9D9";
}
function editableFalse(content){
  content.readOnly =true;
  content.style.backgroundColor = "";
}


function employeeProject(_name){
  var urlParams = decodeURIComponent(window.location.search).substring(1);
  var pass_name = urlParams.split("&")[0].split("=")[1];
  var pass_id = urlParams.split("&")[1].split("=")[1];
  document.getElementById("add").setAttribute("href", "addMemberInProject.php"+projNameUrl(pass_name,pass_id));
  var table = document.getElementById(_name);
  var alphabet = <?php echo json_encode($data);?>;
  for(var i=0; i<alphabet.length; i++){
    var row = table.insertRow(i);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);

    var v1 = alphabet[i].empID;
    var v2 = alphabet[i].ename;
    var pass_personName = personNameUrl(v2,v1);

    var x1 = document.createElement("A");
    var t1 = document.createTextNode(v1);
    x1.setAttribute("href", "personInfo.php"+pass_personName);
    x1.appendChild(t1);

    var x2 = document.createElement("A");
    var t2 = document.createTextNode(v2);
    x2.setAttribute("href", "personInfo.php"+pass_personName);
    x2.appendChild(t2);
    cell1.appendChild(x1);
    cell2.appendChild(x2);
    assignLeader(row,2, v1);
    deleteButton(row,3,v1);
  }
}
function getLeader(){
  var leader = <?php echo json_encode($leader);?>;
  if((Array.isArray(leader) && leader.length)) {
    var v1 = leader[0].ename;
    var v2 = leader[0].empID;
    var pass_personName = "?personName=" + v1 + "&personID=" + v2;
    var x1 = document.createElement("A");
    var t1 = document.createTextNode(v1);
    x1.setAttribute("href", "personInfo.php" + pass_personName);
    x1.appendChild(t1);
    document.getElementById("projLeader")
      .appendChild(x1);
  }
}
function assignLeader(row,num,v1){
  var celld = row.insertCell(num);
  var xd = document.createElement("Button");
  xd.innerHTML='<i class="fas fa-arrow-up"></i>'
  xd.classList.add("assLeader");
  xd.type = "submit";
  xd.name = v1;
  xd.value = "leader";
  celld.appendChild(xd);
}
getLeader();
employeeProject("ListBody");


</script>
</body>
</html>
