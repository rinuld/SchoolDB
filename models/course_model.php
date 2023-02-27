<?php 
    require_once '/xampp/htdocs/SchoolDB/models/connection.php';
    
    class mdlCourse {
        static public function mdlShowCourses(){
            $stmt = (new Connection)->connect()->prepare("SELECT * FROM `course`");
            $stmt -> execute();
            return $stmt -> fetchAll();
            $stmt = null;
        }

        static public function mdlAddCourse($data){
            $db = new Connection();
            $pdo = $db->connect();
            try{
    
                $stmt = $pdo->prepare("INSERT INTO course(coursecode, title, credunits, type, room) VALUES (:coursecode, :title, :credunits, :type, :room)");
    
                $stmt->bindParam(":coursecode", $data["coursecode"], PDO::PARAM_STR);
                $stmt->bindParam(":title", $data["title"], PDO::PARAM_STR);
                $stmt->bindParam(":credunits", $data["credunits"], PDO::PARAM_INT);
                $stmt->bindParam(":type", $data["type"], PDO::PARAM_STR);
                $stmt->bindParam(":room", $data["room"], PDO::PARAM_STR);
                $stmt->execute();			
    
                $pdo->commit();
                return "ok";
            }catch (Exception $e){
                $pdo->rollBack();
                return "error";
            }	
            $pdo = null;	
            $stmt = null;
        }
    }
?>