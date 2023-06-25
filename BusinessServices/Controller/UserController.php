<?php
    require_once 'BusinessServices/Model/User.php';
    require_once 'helpers/session_helper.php';

    class Users {

        private $userModel;
        
        public function __construct(){
            $this->userModel = new User;
        }

        public function register(){
            //Process form
            
            //Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //Init data
            $data = [
                'UserIC' => trim($_POST['UserIC']),
                'UserName' => trim($_POST['UserName']),
                'UserGender' => trim($_POST['UserGender']),
                'UserPhoneNumber' => trim($_POST['UserPhoneNumber']),
                'UserEmail' => trim($_POST['UserEmail']),
                'UserPassword'=>trim($_POST['UserPassword']),
                'UserConfirmPassword'=>trim($_POST['UserConfirmPassword'])
            ];

            //Validate inputs
            if(empty($data['UserIC']) || empty($data['UserName']) || empty($data['UserGender']) || empty($data['UserPhoneNumber']) || empty($data['UserEmail']) || empty($data['UserPassword']) ||empty($data['UserConfirmPassword'])){
                flash("register", "Please fill out all inputs");
                redirect("View\ManageRegistration\RegistrationUserAccount\UserRegForm.php");
            }

            if(!preg_match("/^[a-zA-Z]*$/", $data['UserName'])){
                flash("register", "Invalid username");
                redirect("View\ManageRegistration\RegistrationUserAccount\UserRegForm.php");
            }

            if(!filter_var($data['UserEmail'], FILTER_VALIDATE_EMAIL)){
                flash("register", "Invalid email");
                redirect("View\ManageRegistration\RegistrationUserAccount\UserRegForm.php");
            }

            if(strlen($data['UserPassword']) < 12){
                flash("register", "Invalid password");
                redirect("View\ManageRegistration\RegistrationUserAccount\UserRegForm.php");
            } else if($data['UserPassword'] !== $data['UserConfirmPassword']){
                flash("register", "Passwords don't match");
                redirect(".View\ManageRegistration\RegistrationUserAccount\UserRegForm.php");
            }

            //User with the IC already exists, register as user
            if($this->userModel->findUserByIC($data['UserIC'])){
                flash("register", "UserIC already taken");
                redirect("View\ManageRegistration\RegistrationUserAccount\UserRegForm.php");
            }

            //Passed all validation checks.
            //Now going to hash password
            $data['UserPassword'] = password_hash($data['UserPassword'], PASSWORD_DEFAULT);

            //Register User
            if($this->userModel->register($data)){
                //If correct register all details will link to the login interface
                redirect("View/ManageLogin/ManageUserLogin/UserLoginForm.php");
            }else{
                die("Something went wrong");
            }
        }

    public function login(){
        //Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        //Init data
        $data=[
            'UserIC' => trim($_POST['UserIC']),
            'UserPassword' => trim($_POST['UserPassword'])
        ];

        if(empty($data['UserIC']) || empty($data['UserPassword'])){
            flash("login", "Please fill out all inputs");
            header("location: View/ManageLogin/ManageUserLogin/UserLoginForm.php");
            exit();
        }

        //Check for user/IC
        if($this->userModel->findUserByIC($data['UserIC'])){
            //User Found
            $loggedInUser = $this->userModel->login($data['UserIC'], $data['UserPassword']);
            if($loggedInUser){
                //Create session
                $this->createUserSession($loggedInUser);
            }else{
                flash("login", "Password Incorrect");
                redirect("View/ManageLogin/ManageUserLogin/UserLoginForm.php");
            }
        }else{
            flash("login", "No user found.Please register");
            redirect("View/ManageLogin/ManageUserLogin/UserLoginForm.php");
        }
    }

    public function createUserSession($user){
        $_SESSION['UserIC'] = $user->UserIC;
        $_SESSION['UserPassword'] = $user->UserPassword;
        redirect("View/ManageProfile/ManageUserProfile/ViewUserProfile.php");
    }

    public function logout(){
        unset($_SESSION['UserIC']);
        unset($_SESSION['UserPassword']);
        session_destroy();
        redirect("../View/ManageLogin/ManageUserLogin/UserLoginForm.php");
    }
}

    $init = new Users;

    //Ensure that user is sending a post request
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        switch($_POST['type']){
            case 'register':
                $init->register();
                break;
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