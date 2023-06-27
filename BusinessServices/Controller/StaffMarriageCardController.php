<?php
    require_once('BusinessServices\Model\Application.php');
    require_once('dbconnect.php');
    require_once('BusinessServices\Model\User2.php');
    class StaffMarriageCardController {
        private $list;
        private $info, $info2;
        public function __construct(){
            $id = isset($_GET['userid']) ? $_GET['userid'] : '';
            //$this->list1 = new UserModel();
            //$this->list1->getDataFromDatabase("DATABASE");
            //$this->list2 = new UserModel();
            //$this->list2->getDataFromDatabase("LELAKI");
            $this->list = new Application();
            $this->info = new User2();
            $this->info2 = new User2();
        }

        public function displayTable(){
            $this->list->displayTableCard();
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

        public function backButton(){
            if(isset($_POST["submit4"])){
                $id = $_GET['data'];
                //$_POST['name123'] refers to the <input name='name123'>
                require('dbconnect.php');
                
                header_remove();
                header("Location: index.php?action=staffCardList&userid=$id");
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
    }


?>