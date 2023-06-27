<?php
        require_once('BusinessServices\Model\User2.php');
        require_once('dbconnect.php');

    class UserMarriageCardController {
        private $info, $info2;
        private $list;

        public function __construct(){
            $id = isset($_GET['userid']) ? $_GET['userid'] : '';
            //$spouseid = $_GET['spouseid'];
            $this->info = new User2();
            $this->info2 = new User2();
            $this->list = new Application();
        }
        
        public function displayTable(){
            $this->list->displayTableCard();
        }

        public function backButton(){
            if(isset($_POST["submit4"])){
                $id = isset($_GET['userid']) ? $_GET['userid'] : '';
                //$_POST['name123'] refers to the <input name='name123'>
                require('dbconnect.php');
                
                header_remove();
                header("Location: index.php?action=cardList&userid=$id");
            }
        }

        public function getName($gender){
            
            if($gender === "PEREMPUAN"){
                return $this->info->getName();
            }
            if($gender === "LELAKI"){
                return $this->info2->getName();
            }
        }

        public function getInfo(){
            $this->info->getDataFromDatabase("PEREMPUAN");
            if($this->info->getName() === ""){
                $this->info->getDataFromSpouseDatabase("PEREMPUAN");

            }
            $this->info2->getDataFromDatabase("LELAKI");
            if($this->info2->getName() === ""){
                $this->info2->getDataFromSpouseDatabase("LELAKI");
                
            }
        }

        public function submitInfo(){
            if(isset($_POST["submit3"])){
                $id = isset($_GET['userid']) ? $_GET['userid'] : '';
                //$_POST['name123'] refers to the <input name='name123'>
                require('dbconnect.php');
                
                header_remove();
                header("Location: index.php?action=cardList&userid=$id");
            }
        }

    }
   
