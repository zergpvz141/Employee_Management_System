
function setCurrentName(){
  var urlParams = decodeURIComponent(window.location.search).substring(1);
  var pass_total = urlParams.split("=")[1];
  var pass_name = pass_total.split("&")[0];
  document.getElementById("currentName").innerHTML = pass_name;
  document.getElementById("navName").innerHTML = pass_name;

}
function depNameUrl(name, id){
  var result = "?dptName=" +name+ "&depID="+id;
  return result;
}
function personNameUrl(name, id){
  var result = "?personName=" +name+ "&personID="+id;
  return result;
}
function postNameUrl(name, id){
  var result = "?postName=" +name+ "&postNo="+id;
  return result;
}
function projNameUrl(name, id){
  var result = "?projectName=" +name+ "&projectID="+id;
  return result;
}

function deleteButton(row,num,v1){
  var celld = row.insertCell(num);
  var xd = document.createElement("Button");
  xd.innerHTML='<i class="fas fa-trash-alt"></i>'
  xd.type = "submit";
  xd.name = v1;
  xd.value = "delete";
  celld.appendChild(xd);
}
function un_deleteButton(row,num,v1){
  var celld = row.insertCell(num);
  var xd = document.createElement("Button");
  xd.disabled = true;
  xd.hidden = true;
  celld.appendChild(xd);
}
function add0(num) {
  if(num<10){
    return ('00' + num).slice(-3);
  }else{
    return ('0' + num).slice(-3);
  }
}
function arrayDuplicateCheck(name,type,list){
  for(var i = 0; i < list.length; i++){
    if($name == $list[$i][$type]){
      alert('ERROR! $name Already Exist!');
      return false;
    }
  }
  return true;
}
function arrayNotInCheck(name,type,list){
  for(var i = 0; i < list.length; i++){
    if(name == list[i][type]){
      return true;
    }
  }
  alert('ERROR! '+name+' Not Exist!');
  return false;
}
function empDuplicateCheck(name,type,list){
  for(var i = 0; i < count(list); i++){
    if(name == list[i][type]){
      alert('ERROR! '+name+' Already in a Project!');
      return false;
    }
  }
  return true;
}
function lengthCheck(str, num){
  if(str.length !=num){
    alert('ERROR! '+str+' should be num digits!');
    return false;
  }
}
function genderCheck(str){
  if((str == 'M') || (str == 'F') || str == 'B' || str == 'U' ){
    return true;
  }
  alert('ERROR! Gender should be M/F/B/U !');
  return false;
}
function dateCheck(date){
  if(date == date('Y-m-d',strtotime(date)) || date == date('Y-m-d H:i:s',strtotime(date))){
    return true;
  }
  alert('ERROR! date is not in YYYY-mm-dd or YYYY-mm-dd h:m:s format');
  return false;
}
function dateBeforeCheck(start, end){
  if(Date.parse(end)> Date.parse(start)){
    return true;
  }
  alert('ERROR! End time is before Start time');
  return false;
}
