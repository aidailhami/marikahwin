<?php

require_once 'Libraries/Database.php';

class Admin {

    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    //Find user by email or username
    public function findAdminByIC($AdminIC){
        $this->db->query('SELECT * FROM jaip_administrator WHERE AdminIC = :AdminIC');
        $this->db->bind(':AdminIC', $AdminIC);
    

        $row = $this->db->single();

        //Check row
        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }


    //Login Admin
    public function login($AdminIC, $AdminPassword){
        $row = $this->findUserByIC($UserIC);

        if($row == false) return false;

        $hashedPassword = $row->AdminPassword;
        if(password_verify($AdminPassword, $hashedPassword)){
            return $row;
        }else{
            return false;
        }
    }

    //Reset Password
    public function resetPassword($newPwdHash, $tokenEmail){
        $this->db->query('UPDATE jaip_administrator SET AdminPassword=:AdminPassword WHERE AdminEmail=:AdminEmail');
        $this->db->bind(':AdminPassword', $newPwdHash);
        $this->db->bind(':AdminEmail', $tokenEmail);

        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}
