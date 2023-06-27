<?php 
require_once('BusinessServices\Model\User.php');
require_once('dbconnect.php');

class UserMarriageRegistrationController {
    private $husband;
    private $wife;
    private $info, $info2;

    public function __construct(){
        $id = isset($_GET['userid']) ? $_GET['userid'] : '';
        $this->husband = new User2();
        $this->husband->getDataFromDatabase("LELAKI");

        $this->wife = new User2();
        $this->wife->getDataFromDatabase("PEREMPUAN");

        $spouseid = isset($_GET['spouseid']) ? $_GET['spouseid'] : '';
        $this->info = new User2();
        $this->info2 = new User2();

        $this->list = new Application();
    }

    public function displayTable(){
        $this->list->displayTable();
    }

    public function getHusband(){
        return $this->husband;
    }

    public function getWife(){
        return $this->wife;
    }

    public function backButton(){
        if(isset($_POST["submit4"])){
            $id = $_GET['data'];
            require('dbconnect.php');

            header_remove();
            header("Location: index.php?action=viewList&userid=$id");
        }
    }

    public function getInfo(){
        $this->info->getDataFromDatabase("PEREMPUAN");
        if($this->info->getName() === ""){
            $this->info->getDataFromSpouseDatabase("PEREMPUAN");
            echo "oof";
        }
        $this->info2->getDataFromDatabase("LELAKI");
        if($this->info2->getName() === ""){
            $this->info2->getDataFromSpouseDatabase("LELAKI");
            echo "why";
        }
    }

    public function submitInfo(){
        if(isset($_POST["submit3"])){
            $id = $_GET['userid'];
            require('dbconnect.php');
            $this->info->insertInfoToDatabase();
            header_remove();
            header("Location: index.php?action=viewList&userid=$id");
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

    public function getWifeVariable($inv){
        switch ($inv){
            case 'name':
                return $this->wife->getName();
                break;
            case 'ic':
                return $this->wife->getIC();
                break;
            case 'gender':
                return $this->wife->getGender();
                break;
            case 'dob':
                return $this->wife->getDob();
                break;
            case 'curaddress':
                return $this->wife->getCurrentAddress();
                break;
            case 'icaddress':
                return $this->wife->getICAddress();
                break;
            case 'salary':
                return $this->wife->getSalary();
                break;
            case 'jobsector':
                return $this->wife->getJobSector();
                break;
            case 'position':
                return $this->wife->getUserPosition();
                break;
            case 'religion':
                return $this->wife->getReligionStatus();
                break;
            case 'marriagestatus':
                return $this->wife->getBeforeMarriageStatus();
                break;
            case 'citizenship':
                return $this->wife->getCitizenship();
                break;
            case 'nationality':
                return $this->wife->getNationality();
                break;
            case 'education':
                return $this->wife->getEducationLevel();
                break;
            case 'age':
                return $this->wife->getAge();
                break;
            case 'phonenumber':
                return $this->wife->getPhoneNumber();
                break;
            default :
                break;
        }
    }
    public function submitWifeData(){
        $id = $_GET['userid'];
        
        if(isset($_POST["submit"])){
            require('dbconnect.php');
            
            echo "system";
            //Insert/Update data into database
            if($this->wife->getUserBool() === 1){
                $this->wife->updateDataToDatabase();
            }else{
                $this->wife->insertDataToDatabase();
                $this->spouseid = $this->wife->getIdFromDatabase();
            }
            
            header_remove();
            header("Location: index.php?action=formInfo&userid=$id&spouseid=$spouseid");
        }
    }

    public function getHusbandVariable($inv){
        switch ($inv){
            case 'name':
                return $this->husband->getName();
                break;
            case 'ic':
                return $this->husband->getIC();
                break;
            case 'gender':
                return $this->husband->getGender();
                break;
            case 'dob':
                return $this->husband->getDob();
                break;
            case 'curaddress':
                return $this->husband->getCurrentAddress();
                break;
            case 'icaddress':
                return $this->husband->getICAddress();
                break;
            case 'salary':
                return $this->husband->getSalary();
                break;
            case 'jobsector':
                return $this->husband->getJobSector();
                break;
            case 'position':
                return $this->husband->getUserPosition();
                break;
            case 'religion':
                return $this->husband->getReligionStatus();
                break;
            case 'marriagestatus':
                return $this->husband->getBeforeMarriageStatus();
                break;
            case 'citizenship':
                return $this->husband->getCitizenship();
                break;
            case 'nationality':
                return $this->husband->getNationality();
                break;
            case 'education':
                return $this->husband->getEducationLevel();
                break;
            case 'age':
                return $this->husband->getAge();
                break;
            case 'phonenumber':
                return $this->husband->getPhoneNumber();
                break;
            default :
                break;
        }
    }
    public function submitHusbandData(){
        $id = $_GET['userid'];
       
        
        if(isset($_POST["submit1"])){
           
            require('dbconnect.php');

            //Insert data into database
            if($this->husband->getUserBool() === 1){
                $this->husband->updateDataToDatabase();
            }else{
                $this->husband->insertDataToDatabase();
                $this->spouseid = $this->husband->getIdFromDatabase();
            }
            header_remove();
            header("Location: index.php?action=formWife&userid=$id");
        }
    }
    public function createForm(){
        $this->husband->createForm();
    }
}








