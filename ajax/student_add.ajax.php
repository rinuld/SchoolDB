<?php
require_once "/xampp/htdocs/SchoolDB/models/student_model.php";
require_once "/xampp/htdocs/SchoolDB/controllers/student_controller.php";

class addStudent{

  public $lname;
  public $fname;
  public $mi;
  public $address;
  public $coursecode;
  public $bdate;
  public $age;
  public $gender;

  public function addStudentRecord(){

  	$lname = $this->lname;
  	$fname = $this->fname;
  	$mi = $this->mi;
    $address = $this->address;
  	$coursecode = $this->coursecode;
  	$bdate = $this->bdate;
  	$age = $this->age;
    $gender = $this->gender;

    $data = array("lname"=>$lname,
    	            "fname"=>$fname,
                  "mi"=>$mi,
                  "address"=>$address,
                  "coursecode"=>$coursecode,
                  "bdate"=>$bdate,
                  "age"=>$age,
                  "gender"=>$gender);

    $answer = (new ctrStudent)->ctrAddStudent($data);
  }
}

$student = new addStudent();
$student -> lname = $_POST["lname"];
$student -> fname = $_POST["fname"];
$student -> mi = $_POST["mi"];
$student -> address = $_POST["address"];
$student -> coursecode = $_POST["coursecode"];
$student -> bdate = $_POST["bdate"];
$student -> age = $_POST["age"];
$student -> gender = $_POST["gender"];

$student -> addStudentRecord();