<?php
   $con=mysqli_connect("localhost","root","root","emdb");
   if(!$con)
   {
     die("connection failed:".mysqli_connect_errno());
   }
if (mysqli_query($con, "UPDATE project SET projManager = '020' where projNo = '00000850'")) {
  echo "<script type='text/javascript'>alert('Records added successfully.');</script>";
} else {
  echo "ERROR: Could not able to execute $queryString. " . mysqli_error($con);
}
   ?>
