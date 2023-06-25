<?php 

class Model{

    public function getlogin(){
        //this check the field we are gonna set
        if(isset($_REQUEST['StaffIC'])&& isset($_REQUEST['StaffPassword'])){
                include('../db_connect.php');
                $StaffIC=$_REQUEST['StaffIC'];
                $StaffPasssword = $_REQUEST['StaffPassword'];

                $_SESSION['StaffIC'] = "$StaffIC";

                $salted = "hasher512encryption" + $password + "saltadded"; //here basic salt is used (nothing too complex for this application).
                                                                //a unique salt would be used in real world applications
            $hashedpass = hash('sha512', $salted);  
                    
            $check_staff="select * from staffprofile WHERE StaffIC='$StaffIC' AND StaffPassword='$hashedpass'";   //the hashed and salt added variable is now used to compare the database's hashed and salt password
                                                                                                       //if they are the same the the system will allow you to log in.
            $run=mysqli_query($dbcon,$check_staff);  //basic variable used to connect and retreive data from the database
            
            if($StaffIC==$_REQUEST['StaffIC'] && $StaffPassword = $_REQUEST['StaffPassword'])
            {
                header("Location: ../App/ManageLoginStaffView/LoginStaffView.php");
            }
            else if(mysqli_num_rows($run))  
            {  
                return 'login'; //here we return to our model/controller a value which will allow us to move within the mvc-based structure.
       
            }  
            else  
            {  
                echo "<script>alert('IC or password is incorrect!')</script>";  // just as simple alert to let you know what went wrong
            }  
        }                                                                           //if the database were to be bigger I would create a class which would encapsulate the fields being inserted/updated in the database
    }                                                                               //this would also base the design more on OOP principles as well as safer as the data can be made private
} 


class Staff{

    private $sql;

    private $StaffIC;
    private $StaffName;
    private $StaffCategoryAccess;
    private $StaffPassword;

    function UpdateStaffProfile(){
        include('../db_connect.php');
        $sql;
        $StaffIC = $_POST['StaffIC'];
        $StaffName = $_POST['StaffName'];
        $StaffCategoryAccess = $_POST["StaffCategoryAccess"];
        $StaffPassword = $_POST["StaffPassword"];

    

    $sql = "UPDATE staffprofile SET StaffIC = '$StaffIC', StaffName = '$StaffName', StaffCateogryAccess = '$StaffCategoryAccess', StaffPassword = '$StaffPassword'" ;

    //Run the sql for inserting and check for error
    if (mysqli_query($conn, $sql)) {
       //echo "Data inserted successfully";
       } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       } 

}

}


?>

   