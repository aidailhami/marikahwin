<?php

require_once('../../Model/Staff.php');
include('../../../db_connect.php');


//check connection 
if($conn===false){
    die("ERROR: Could not connect". mysqli_connect_error());
}

class EditStaffProfileController{
    private $StaffIC;
    private $StaffName;
    private $StaffCategoryAccess;
    private $StaffPassword;


    public function __construct(){
        $this->StaffIC = new Staff();
    }


}

    $StaffIC = $_REQUEST['StaffIC'];
    $StaffCategoryAccess = $_REQUEST['StaffCategoryAccess'];
    $StaffName = $_REQUEST['StaffName'];
    $StaffPosition = $_REQUEST['StaffPosition'];
    $StaffEmail = $_REQUEST['StaffEmail'];
    $StaffPAID = $_REQUEST['StaffPAID'];
    $StaffStatus = $_REQUEST['StaffStatus'];
    $StaffPassword = $_REQUEST['StaffPassword'];

    $sql = "INSERT INTO staffprofile (StaffIC,StaffCategoryAccess,StaffName,StaffPosition,StaffEmail,StaffPAID,StaffStatus,StaffPassword) VALUES('$StaffIC','$StaffCategoryAccess','$StaffName','$StaffPosition','$StaffEmail','$StaffPAID','$StaffStatus','$StaffPassword')";

    //run the sql for insert and check for error

    if(mysqli_query($conn,$sql)){
       
        echo '<script> alert("Data inserted succesfully")</script>';
     
       
       
    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);

    
    }

      //Close connection
  mysqli_close($conn);

?>
<!DOCTYPE html>
   <html>
    <button onclick="window.location.href='../../../View/ManageRegistration/RegistrationStaffAccount/RegStaffForm.php';">DONE</button>
</html>
  
 
  
 





