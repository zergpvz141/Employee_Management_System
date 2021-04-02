main pages:
  index.php               // login page. User name: Songtao, password: 000000    or other username and password in the login table
  homePage.php             // The welcome page of the system.
  departmentList.php       // list of all the departments, their id#, name, and mangager.
  employee.php             // list of all the employee, their id#, name, department, position and salary.
  project.php              // list of all the porject, their id#, name, start time and end time.
  positionlist.php         // list of all the position, their id#, and the title.

sub pages:
  department.php           // display infomation about the selected department.
  personInfo.php           // display infomation about the selected employee.
  position.php             // display the member of the selected position.
  projectInfo.php          // display infomation and member of the selected project.

funtional pages:
  addDepartment.php        // allow user to add a new department.
  addEmployee.php          // allow user to add a new employee.
  addMemberInPosition.php  // allow user to add a new employee in the selected position.
  addMemberInProject.php   // allow user to add a new employee in the selected Project.
  addMemberInDepartment.php// allow user to add a new employee in the selected department.
  addPosition.php          // allow user to add a new position.
  addProject.php           // allow user to add a new Project.
  checkFunction.php        // store php form validation functions.
  dist/js/tableFunctions.js// store javascript functions.

Important! Do NOT directly open department.php，personInfo.php，projectInfo.php，position.php，addMemberInPosition.php，
								addMemberInProject.php and addMemberInDepartment.php in browser. 
			Because these pages uses pass in argument from the previous page.
			Please start from the login page for complete using experience.