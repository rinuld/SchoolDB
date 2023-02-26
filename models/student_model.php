<?php 
    require_once '/xampp/htdocs/SchoolDB/models/connection.php';
    
    class mdlStudent {
        static public function mdlShowStudents(){
            $stmt = (new Connection)->connect()->prepare("SELECT * FROM `student`");
            $stmt -> execute();
            return $stmt -> fetchAll();
            $stmt = null;
        }
    }
?>