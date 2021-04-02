<!DOCTYPE html>
<html>
  <head>
    <link href="css/login.css" rel="stylesheet" type="text/css" media="screen"/>
  </head>

  <body>
    <div class="modal">
      <div class="modal-dialog">
    	<div class="loginmodal-container">
    		<h1>Employee Manager System</h1><br>
    	  <form id="myform" onsubmit="return verify()" action="homePage.php" >
    		<input type="text" id="username" name="user" placeholder="Username">
    		<input type="password" id="password" name="pass" placeholder="Password">
    		<input type="submit" id="submit" name="login" class="login loginmodal-submit" value="Login">
    	  </form>
    	  </div>
    	</div>
    </div>
  </body>
  <?php
  $con=mysqli_connect("localhost","root","root","emdb");
  if(!$con)
  {
    die("connection failed:".mysqli_connect_errno());
  }
  $result=mysqli_query($con,"SELECT username, password, authority FROM login;");
  $data = array();
  while ($row = mysqli_fetch_array($result)) {
    $data[] = $row;
  }
  ?>

  <script type="text/javascript">
      function verify() {
        var loginList = <?php echo json_encode($data);?>;
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;
        for(var i = 0; i< loginList.length;i++) {
          var pair = loginList[i];
          if (username == pair.username && password == pair.password) {
            console.log(pair);
            return true;
          }
        }
        alert("Username or password incorrect!");
        return false;
        }
  </script>
  <?php
  $con=mysqli_connect("localhost","root","root","emdb");
  if(!$con)
  {
    die("connection failed:".mysqli_connect_errno());
  }
  $result=mysqli_query($con,"SELECT username, password, authority FROM login;");
  $data = array();
  while ($row = mysqli_fetch_array($result)) {
    $data[] = $row;
  }
  ?>
</html>
