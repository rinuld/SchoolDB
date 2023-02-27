<?php
require_once "/xampp/htdocs/SchoolDB/models/course_model.php";
require_once "/xampp/htdocs/SchoolDB/controllers/course_controller.php";

class addCourse{

  public $coursecode;
  public $title;
  public $credunits;
  public $type;
  public $room;

  public function addCouseRecord(){

  	$coursecode = $this->coursecode;
  	$title = $this->title;
  	$credunits = $this->credunits;
    $type = $this->type;
  	$room = $this->room;

    $data = array("coursecode"=>$coursecode,
    	          "title"=>$title,
                  "credunits"=>$credunits,
                  "type"=>$type,
                  "room"=>$room);

    $answer = (new ctrCourse)->ctrAddCourse($data);
  }
}

$course = new addCourse();
$course -> coursecode = $_POST["coursecode"];
$course -> title = $_POST["title"];
$course -> credunits = $_POST["credunits"];
$course -> type = $_POST["type"];
$course -> room = $_POST["room"];

$course -> addCouseRecord();