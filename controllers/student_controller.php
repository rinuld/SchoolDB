<?php
    require_once '/xampp/htdocs/SchoolDB/models/student_model.php';
    
    class ctrStudent {
        static public function ctrShowStudents(){
            $answer = (new mdlStudent)->mdlShowStudents();
            return $answer;
        }

        static public function ctrAddStudent($data){
            $answer = (new mdlStudent)->mdlAddStudent($data);
        }
    }
?>