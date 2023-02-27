<?php
    require_once '/xampp/htdocs/SchoolDB/models/course_model.php';
    
    class ctrCourse {
        static public function ctrShowCourses(){
            $answer = (new mdlCourse)->mdlShowCourses();
            return $answer;
        }

        static public function ctrAddCourse($data){
            $answer = (new mdlCourse)->mdlAddCourse($data);
        }
    }
?>