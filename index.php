<?php 

//MODEL
require_once('dbconnect.php');
require_once('BusinessServices\Model\User.php');

////VIEW
require_once('View\ManageMarriageRegistration\ManageMarriageRegistrationUserView\MarriageRegistrationHusband.php');
require_once('View\ManageMarriageRegistration\ManageMarriageRegistrationUserView\MarriageRegistrationWife.php');
require_once('View\ManageMarriageRegistration\ManageMarriageRegistrationUserView\MarriageRegistrationList.php');
require_once('View\ManageMarriageRegistration\ManageMarriageRegistrationUserView\MarriageRegistrationInfo.php');
require_once('View\ManageMarriageRegistration\ManageMarriageRegistrationUserView\ViewMarriageRegistration.php');
require_once('View\ManageMarriageRegistration\ManageMarriageRegistrationStaffView\StaffMarriageRegistrationList.php');
require_once('View\ManageMarriageRegistration\ManageMarriageRegistrationStaffView\StaffViewMarriageRegistration.php');
require_once('View\ManageMarriageCard\ManageMarriageCardUserView\MarriageCardList.php');
require_once('View\ManageMarriageCard\ManageMarriageCardUserView\ViewMarriageCard.php');
require_once('View\ManageMarriageCard\ManageMarriageCardUserView\MarriageCardForm.php');
require_once('View\ManageMarriageCard\ManageMarriageCardStaffView\StaffMarriageCardList.php');
require_once('View\ManageMarriageCard\ManageMarriageCardStaffView\StaffViewMarriageCard.php');


////CONTROLLER
require_once('BusinessServices\Controller\UserMarriageRegistrationController.php');
require_once('BusinessServices\Controller\StaffMarriageRegistrationController.php');
require_once('BusinessServices\Controller\UserMarriageCardController.php');
require_once('BusinessServices\Controller\StaffMarriageCardController.php');


$action = isset($_GET['action']) ? $_GET['action'] : 'default';
//$id = $_GET['userid'];
//$id = "1001";
switch($action){
    case 'formHusband':
        $controller = new MarriageRegistrationHusband();
        $controller->render();
        break;
    case 'formWife':
        $controller = new MarriageRegistrationWife();
        $controller->render();
        break;
    case 'formInfo':
        $controller = new MarriageRegistrationInfo();
        $controller->render();
        break;
    case 'viewList':
        $controller = new MarriageRegistrationList();
        $controller->render();
        break;
    case 'staffViewList':
        $controller = new StaffMarriageRegistrationList();
        $controller->render();
        break;
    case 'staffCardList':
        $controller = new StaffMarriageCardList();
        $controller->render();
        break;
    case 'staffViewMarriageCard':
        $controller = new StaffViewMarriageCard();
        $controller->render();
        break;
    case 'staffViewMarriageDetail':
        $controller = new StaffViewMarriageRegistration();
        $controller->render();
        break;
    case 'viewDetail':
        $controller = new ViewMarriageRegistration();
        $controller->render();
        break;
    case 'marriageCardForm':
        $controller = new MarriageCardForm();
        $controller->render();
        break;
    case 'cardList':
        $controller = new MarriageCardList();
        $controller->render();
        break;
    case 'viewMarriageCard':
        $controller = new ViewMarriageCard();
        $controller->render();
        break;
    default:
        $controller = new MarriageRegistrationList();
        $controller->render();
        break;


}

