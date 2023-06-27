<?php
    require_once('BusinessServices\Model\Staff2.php');
    require_once('dbconnect.php');
    class StaffMarriageRegistrationController {
        private $list;
        private $info, $info2;
        
        public function __construct(){
            //$id = $_GET['staffid'];
            //$this->list1 = new UserModel();
            //$this->list1->getDataFromDatabase("DATABASE");
            //$this->list2 = new UserModel();
            //$this->list2->getDataFromDatabase("LELAKI");
            $this->list = new Staff2();
            $this->info = new User2();
            $this->info2 = new User2();
        }

        public function staffDisplayTable(){
            $this->list->staffDisplayTable();
        }

        public function backButton(){
        if(isset($_POST["submit4"])){
            $id = $_GET['data'];
            //$_POST['name123'] refers to the <input name='name123'>
            require('dbconnect.php');

            header_remove();
            header("Location: index.php?action=staffViewList&userid=$id");
        } 

        }
    }