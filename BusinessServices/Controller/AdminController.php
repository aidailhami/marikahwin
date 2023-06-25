<?php
    require_once 'BusinessServices/Model/Admin.php';
    require_once 'helpers/session_helper.php';

    class Admin {

        private $adminModel;
        
        public function __construct(){
            $this->adminModel = new Admin;
        }


    public function login(){
        //Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        //Init data
        $data=[
            'AdminIC' => trim($_POST['AdminIC']),
            'AdminPassword' => trim($_POST['AdminPassword'])
        ];

        if(empty($data['AdminIC']) || empty($data['AdminPassword'])){
            flash("login", "Please fill out all inputs");
            header("location: View/ManageLogin/ManageAdminLogin/AdminLoginForm.php");
            exit();
        }

        //Check for Admin IC
        if($this->adminModel->findUserByIC($data['AdminIC'])){
            //Admin Found
            $loggedInAdmin = $this->adminModel->login($data['AdminIC'], $data['AdminPassword']);
            if($loggedInAdmin){
                //Create session
                $this->createUserSession($loggedInAdmin);
            }else{
                flash("login", "Password Incorrect");
                redirect("View/ManageLogin/ManageAdminLogin/AdminLoginForm.php");
            }
        }else{
            flash("login", "No user found.Please register");
            redirect("View/ManageLogin/ManageAdminLogin/AdminLoginForm.php");
        }
    }

    public function createUserSession($admin){
        $_SESSION['AdminIC'] = $Admin->AdminIC;
        $_SESSION['AdminPassword'] = $Admin->AdminPassword;
    }

    public function logout(){
        unset($_SESSION['AdminIC']);
        unset($_SESSION['AdminPassword']);
        session_destroy();
        redirect("../View/ManageLogin/ManageAdminLogin/AdminLoginForm.php");
    }
}

    $init = new Admin;

    //Ensure that user is sending a post request
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        switch($_POST['type']){
            case 'login':
                $init->login();
                break;
            default:
            redirect("../index.php");
        }
        
    }else{
        switch($_GET['q']){
            case 'logout':
                $init->logout();
                break;
            default:
            redirect("../index.php");
        }
    }

 ?>
