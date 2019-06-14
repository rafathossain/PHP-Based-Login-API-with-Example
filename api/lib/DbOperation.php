<?php

class DbOperation
{
    private $conn;

    function __construct()
    {
        require_once dirname(__FILE__) . '/Constants.php';
        require_once dirname(__FILE__) . '/DbConnect.php';
        
        $db = new DbConnect();
        $this->conn = $db->connect();
    }

    public function isUserExist($email){
        $stmt = $this->conn->prepare("SELECT * FROM table_name_here WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        $rows = $stmt->num_rows;
        $stmt->close();
        if($rows == 1){
            return true;
        } else {
            return false;
        }
    }
    
    public function hasPasswordMatched($email, $password){
        $stmt = $this->conn->prepare("SELECT password FROM table_name_here WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($pass);
        $stmt->fetch();
        $stmt->close();
        if(password_verify($password, $pass)){
            return true;
        } else {
            return false;
        }
    }
}