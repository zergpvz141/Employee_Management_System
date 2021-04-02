


<?php
//return false if duplicate found
function arrayDuplicateCheck($name,$type,$list){
  for($i = 0; $i < count($list); $i++){
    if($name == $list[$i][$type]){
      echo "<script type='text/javascript'>alert('ERROR! $name Already Exist!');</script>";
      return false;
    }
  }
  return true;
}
function arrayNotInCheck($name,$type,$list){
  for($i = 0; $i < count($list); $i++){
    if($name == $list[$i][$type]){
      return true;
    }
  }
  echo "<script type='text/javascript'>alert('ERROR! $name Not Exist!');</script>";
  return false;
}
function empDuplicateCheck($name,$type,$list){
  for($i = 0; $i < count($list); $i++){
    if($name == $list[$i][$type]){
      echo "<script type='text/javascript'>alert('ERROR! $name Already in a Project!');</script>";
      return false;
    }
  }
  return true;
}
function lengthCheck($str, $num){
    if(strlen($str) !=$num){
      echo "<script type='text/javascript'>alert('ERROR! $str should be $num digits!');</script>";
      return false;
    }
    return true;
}
function genderCheck($str){
  if($str == 'M' or $str == 'F' or $str == 'B' or $str == 'U' ){
    return true;
  }
  echo "<script type='text/javascript'>alert('ERROR! Gender should be M/F/B/U !');</script>";
  return false;
}
function dateCheck($date){
    if($date == date('Y-m-d',strtotime($date)) or $date == date('Y-m-d H:i:s',strtotime($date)) or $date==''){
      return true;
    }
  echo "<script type='text/javascript'>alert('ERROR! $date is not in YYYY-mm-dd or YYYY-mm-dd h:m:s format');</script>";
  return false;
}
function dateCheck_noEmpty($date){
  if($date == date('Y-m-d',strtotime($date)) or $date == date('Y-m-d H:i:s',strtotime($date))){
    return true;
  }
  echo "<script type='text/javascript'>alert('ERROR! $date is not in YYYY-mm-dd or YYYY-mm-dd h:m:s format');</script>";
  return false;
}
function intCheck($num){
  if(is_numeric($num) or $num ==''){
      return true;
  }else{
    echo "<script type='text/javascript'>alert('ERROR! $num is not a number!');</script>";
    return false;
  }
}
function dateBeforeCheck($start, $end){
  if(date('Y-m-d H:i:s', strtotime($end)) > date('Y-m-d H:i:s', strtotime($start)) or $end==''){
    return true;
  }
  echo "<script type='text/javascript'>alert('ERROR! End time is before Start time');</script>";
  return false;
}
function getCheckResultList($con,$query){
  $queryResult=mysqli_query($con,$query);
  $resultList = array();
  while ($row = mysqli_fetch_assoc($queryResult)) {
    $resultList[] = $row;
  }
  return$resultList;
}
function notEmptyCheck($name,$string){
  if($name !=""){
    return true;
  }
  echo "<script type='text/javascript'>alert('ERROR! $string cannot be empty!');</script>";
  return false;
}
?>
