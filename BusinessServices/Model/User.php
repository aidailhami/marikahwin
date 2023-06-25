<?php

require_once 'Libraries/Database.php';

class User {

    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    //Find user by email or username
    public function findUserByIC($UserIC){
        $this->db->query('SELECT * FROM user WHERE UserIC = :UserIC');
        $this->db->bind(':UserIC', $UserIC);
    

        $row = $this->db->single();

        //Check row
        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }

    //Register User
    public function register($data){
        $this->db->query('INSERT INTO user(UserIC, User_Name, User_Gender, User_PhoneNumber, User_Email, User_Password) 
        VALUES (:UserIC, :UserName, :UserGender, :UserPhoneNumber, :UserEmail, :UserPassword)');
        //Bind values
        $this->db->bind(':UserIC', $data['UserIC']);
        $this->db->bind(':UserName', $data['UserName']);
        $this->db->bind(':UserGender', $data['UserGender']);
        $this->db->bind(':UserPhoneNumber', $data['UserPhoneNumber']);
        $this->db->bind(':UserEmail', $data['UserEmail']);
        $this->db->bind(':UserPassword', $data['UserPassword']);

        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    //Login user
    public function login($UserIC, $UserPassword){
        $row = $this->findUserByIC($UserIC);

        if($row == false) return false;

        $hashedPassword = $row->UserPassword;
        if(password_verify($UserPassword, $hashedPassword)){
            return $row;
        }else{
            return false;
        }
    }

    //Reset Password
    public function resetPassword($newPwdHash, $tokenEmail){
        $this->db->query('UPDATE user SET User_Password=:UserPassword WHERE User_Email=:UserEmail');
        $this->db->bind(':UserPassword', $newPwdHash);
        $this->db->bind(':UserEmail', $tokenEmail);

        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}