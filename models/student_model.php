<?php 
    require_once '/xampp/htdocs/SchoolDB/models/connection.php';
    
    class mdlStudent {
        static public function mdlShowStudents(){
            $stmt = (new Connection)->connect()->prepare("SELECT * FROM `student`");
            $stmt -> execute();
            return $stmt -> fetchAll();
            $stmt = null;
        }

        static public function mdlAddStudent($data){
            $db = new Connection();
            $pdo = $db->connect();
            try{
    
                $stmt = $pdo->prepare("INSERT INTO student(lname, fname, mi, address, coursecode, bdate, age, gender) VALUES (:lname, :fname, :mi, :address, :coursecode, :bdate, :age, :gender)");
    
                $stmt->bindParam(":lname", $data["lname"], PDO::PARAM_STR);
                $stmt->bindParam(":fname", $data["fname"], PDO::PARAM_STR);
                $stmt->bindParam(":mi", $data["mi"], PDO::PARAM_STR);
                $stmt->bindParam(":address", $data["address"], PDO::PARAM_STR);
                $stmt->bindParam(":coursecode", $data["coursecode"], PDO::PARAM_STR);
                $stmt->bindParam(":bdate", $data["bdate"], PDO::PARAM_STR);
                $stmt->bindParam(":age", $data["age"], PDO::PARAM_INT);
                $stmt->bindParam(":gender", $data["gender"], PDO::PARAM_STR);
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