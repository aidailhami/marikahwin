<?php

require_once('../Model/Staff.php');
class StaffLoginController{
    private $Staff;


    public function __construct(){
        $this->Model = new Staff();

        $this->Staff->getDataFromDatabase();

        ///.......................................................
        //.......................................................
        //.......................................................
        //......................................................
}


}
?>
