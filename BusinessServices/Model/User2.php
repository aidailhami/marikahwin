<?php 
//require($_SERVER['DOCUMENT_ROOT'].'\SDW\sdd\Model\db_connect.php');
    class User2 {

        private $sql;
        private $id;
        private $name;
        private $ic;
        private $gender;
        private $dob;
        private $currentaddress;
        private $icaddress;
        private $salary;
        private $jobsector;
        private $user_position;
        private $religionstatus;
        private $beforemarriagestatus;
        private $citizenship;
        private $nationality;
        private $educationlevel;
        private $age;
        private $phonenumber;
        private $user;

        function getSQL($id){
            $sql = "SELECT * FROM spouse_details WHERE SpouseID = '$id' AND Spouse_Gender = 'PEREMPUAN'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            return $result;
        }

        function existingInfo($id){
            return $result;
        }
    
        function existingInfoKP($kadpengenalan){
            include_once('dbconnect.php');
            $sql = "SELECT * FROM user WHERE UserIC = '$kadpengenalan'";
            $result = mysqli_query($conn, $sql);
            return $result;
        }

        function getDataFromDatabase($genderform){
            include('dbconnect.php');
            $id = isset($_GET['userid']) ? $_GET['userid'] : '';

            if($genderform === "PEREMPUAN"){
                $sql = "SELECT * FROM user WHERE UserID = '$id' AND User_Gender = 'PEREMPUAN'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                if(mysqli_num_rows($result) === 0){
                    $this->name = "";
                    $this->ic = "";
                    $this->gender = "";
                    $this->dob = "";
                    $this->currentaddress = "";
                    $this->icaddress = "";
                    $this->salary = "";
                    $this->jobsector = "";
                    $this->user_position = "";
                    $this->religionstatus = "";
                    $this->beforemarriagestatus = "";
                    $this->citizenship = "";
                    $this->nationality = "";
                    $this->educationlevel = "";
                    $this->age = "";
                    $this->phonenumber = "";
                    $this->user = 0;
                }else{
                    $this->name = $row['User_Name'];
                    $this->ic = $row['UserIC'];
                    $this->gender = $row['User_Gender'];
                    $this->dob = $row['User_DOB'];
                    $this->currentaddress = $row['User_CurrentAddress'];
                    $this->icaddress = $row['User_ICAddress'];
                    $this->salary = $row['User_Salary'];
                    $this->jobsector = $row['User_JobSector'];
                    $this->user_position = $row['User_Position'];
                    $this->religionstatus = $row['User_ReligionStatus'];
                    $this->beforemarriagestatus = $row['User_BeforeMarriageStatus'];
                    $this->citizenship = $row['User_Citizenship'];
                    $this->nationality = $row['User_Nationality'];
                    $this->educationlevel = $row['User_EducationLevel'];
                    $this->age = $row['User_Age'];
                    $this->phonenumber = $row['User_PhoneNumber'];
                    $this->user = 1;
                }
            }else if($genderform === "LELAKI"){
                $sql = "SELECT * FROM user WHERE UserID = '$id' AND User_Gender = 'LELAKI'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                if(mysqli_num_rows($result) === 0){
                    $this->name = "";
                    $this->ic = "";
                    $this->gender = "";
                    $this->dob = "";
                    $this->currentaddress = "";
                    $this->icaddress = "";
                    $this->salary = "";
                    $this->jobsector = "";
                    $this->user_position = "";
                    $this->religionstatus = "";
                    $this->beforemarriagestatus = "";
                    $this->citizenship = "";
                    $this->nationality = "";
                    $this->educationlevel = "";
                    $this->age = "";
                    $this->phonenumber = "";
                    $this->user = 0;
                }else{
                    $this->name = $row['User_Name'];
                    $this->ic = $row['UserIC'];
                    $this->gender = $row['User_Gender'];
                    $this->dob = $row['User_DOB'];
                    $this->currentaddress = $row['User_CurrentAddress'];
                    $this->icaddress = $row['User_ICAddress'];
                    $this->salary = $row['User_Salary'];
                    $this->jobsector = $row['User_JobSector'];
                    $this->user_position = $row['User_Position'];
                    $this->religionstatus = $row['User_ReligionStatus'];
                    $this->beforemarriagestatus = $row['User_BeforeMarriageStatus'];
                    $this->citizenship = $row['User_Citizenship'];
                    $this->nationality = $row['User_Nationality'];
                    $this->educationlevel = $row['User_EducationLevel'];
                    $this->age = $row['User_Age'];
                    $this->phonenumber = $row['User_PhoneNumber'];
                    $this->user = 1;
                }
            }   
        }

        function getDataFromSpouseDatabase($genderform){
            include('dbconnect.php');
            $id = isset($_GET['userid']) ? $_GET['userid'] : '';

            if($genderform === "PEREMPUAN"){
                $sql = "SELECT * FROM spouse_details WHERE SpouseID = '$id' AND Spouse_Gender = 'PEREMPUAN'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                if(mysqli_num_rows($result) !== 0){
                    $this->name = $row['Spouse_Name'];
                    $this->ic = $row['SpouseIC'];
                    $this->gender = $row['Spouse_Gender'];
                    $this->dob = $row['Spouse_DOB'];
                    $this->currentaddress = $row['Spouse_CurrentAddress'];
                    $this->icaddress = $row['Spouse_ICAddress'];
                    $this->salary = $row['Spouse_Salary'];
                    $this->jobsector = $row['Spouse_JobSector'];
                    $this->user_position = $row['Spouse_Position'];
                    $this->religionstatus = $row['Spouse_ReligionStatus'];
                    $this->beforemarriagestatus = $row['Spouse_BeforeMarriageStatus'];
                    $this->citizenship = $row['Spouse_Citizenship'];
                    $this->nationality = $row['Spouse_Nationality'];
                    $this->educationlevel = $row['Spouse_EducationLevel'];
                    $this->age = $row['Spouse_Age'];
                    $this->phonenumber = $row['Spouse_PhoneNumber'];
                }
            }else if($genderform === "LELAKI"){
                $sql = "SELECT * FROM spouse_details WHERE SpouseID = '$id' AND Spouse_Gender = 'LELAKI'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                if(mysqli_num_rows($result) !== 0){
                    $this->name = $row['Spouse_Name'];
                    $this->ic = $row['SpouseIC'];
                    $this->gender = $row['Spouse_Gender'];
                    $this->dob = $row['Spouse_DOB'];
                    $this->currentaddress = $row['Spouse_CurrentAddress'];
                    $this->icaddress = $row['Spouse_ICAddress'];
                    $this->salary = $row['Spouse_Salary'];
                    $this->jobsector = $row['Spouse_JobSector'];
                    $this->user_position = $row['Spouse_Position'];
                    $this->religionstatus = $row['Spouse_ReligionStatus'];
                    $this->beforemarriagestatus = $row['Spouse_BeforeMarriageStatus'];
                    $this->citizenship = $row['Spouse_Citizenship'];
                    $this->nationality = $row['Spouse_Nationality'];
                    $this->educationlevel = $row['Spouse_EducationLevel'];
                    $this->age = $row['Spouse_Age'];
                    $this->phonenumber = $row['Spouse_PhoneNumber'];
                }
            }   
        }

        function insertDataToDatabase(){
            include('dbconnect.php');
            $id = isset($_GET['userid']) ? $_GET['userid'] : '';
                $name = $_POST['nama'];
                $dob = $_POST['tarikh'];
                $ic = $_POST['kadpengenalan'];
                $age = $_POST['umur'];
                $citizenship = $_POST['warganegara'];
                $educationlevel = $_POST['taraf'];
                $nationality = $_POST['bangsa'];
                $beforemarriagestatus = $_POST['status'];
                $currentaddress = $_POST['textaddress1'];
                $icaddress = $_POST['textaddress2'];
                $jobsector = $_POST['sektor'];
                $user_position = $_POST['pekerjaan'];
                $salary = $_POST['pendapatan'];
                $phonenumber = $_POST['telefon'];
                $religionstatus = $_POST['saudara'];
                
                if($ic%2 == 0){
                    $gender = "PEREMPUAN";
                }else{
                    $gender = "LELAKI";
                }

            $sql = "INSERT INTO spouse_details (SpouseIC, Spouse_Name, Spouse_Gender, Spouse_PhoneNumber, 
            Spouse_DOB, Spouse_Age, Spouse_CurrentAddress, Spouse_ICAddress, 
            Spouse_EducationLevel, Spouse_Salary, Spouse_JobSector, 
            Spouse_Position, Spouse_ReligionStatus, Spouse_BeforeMarriageStatus, Spouse_Citizenship, 
            Spouse_Nationality) VALUES ('$ic', '$name','$gender','$phonenumber',
            '$dob','$age','$currentaddress','$icaddress','$educationlevel', '$salary','$jobsector','$user_position',
            '$religionstatus', '$beforemarriagestatus', '$citizenship', '$nationality')";
            //run the sql for inserting and check for error                            
            if (mysqli_query($conn, $sql)) {
            //echo "Data inserted successfully";
            } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            } 
        }
        function updateDataToDatabase(){
            include('dbconnect.php');
            $id = isset($_GET['userid']) ? $_GET['userid'] : '';
            $name = $_POST['nama'];
            $dob = $_POST['tarikh'];
            $ic = $_POST['kadpengenalan'];
            $age = $_POST['umur'];
            $citizenship = $_POST['warganegara'];
            $educationlevel = $_POST['taraf'];
            $nationality = $_POST['bangsa'];
            $beforemarriagestatus = $_POST['status'];
            $currentaddress = $_POST['textaddress1'];
            $icaddress = $_POST['textaddress2'];
            $jobsector = $_POST['sektor'];
            $user_position = $_POST['pekerjaan'];
            $salary = $_POST['pendapatan'];
            $phonenumber = $_POST['telefon'];
            $religionstatus = $_POST['saudara'];
            
            $sql = "UPDATE user SET UserIC = '$ic', User_Name = '$name', User_PhoneNumber = '$phonenumber', 
                                                User_DOB = '$dob', User_Age = '$age', User_CurrentAddress = '$currentaddress', 
                                                User_ICAddress = '$icaddress', User_EducationLevel = '$educationlevel', User_Salary = '$salary',
                                                User_JobSector = '$jobsector', User_Position = '$user_position', User_ReligionStatus = '$religionstatus',
                                                User_BeforeMarriageStatus = '$beforemarriagestatus', User_Citizenship = '$citizenship', User_Nationality = '$nationality' 
                                                WHERE UserID = '$id'";
                //run the sql for inserting and check for error                            
            if (mysqli_query($conn, $sql)) {
                echo "Data updated successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

        function getIdFromDatabase(){

            include('dbconnect.php');
            $ic = $_POST['kadpengenalan'];
            $sql = "SELECT * FROM user WHERE UserIC ='$ic'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $id = $row['UserID'];
            return $id;
        }

        function getName(){
            return $this->name;
        }
        function getIC(){
            return $this->ic;
        }
        function getGender(){
            return $this->gender;
        }
        function getDob(){
            return $this->dob;
        }
        function getCurrentAddress(){
            return $this->currentaddress;
        }
        function getICAddress(){
            return $this->icaddress;
        }
        function getSalary(){
            return $this->salary;
        }
        function getJobSector(){
            return $this->jobsector;
        }
        function getUserPosition(){
            return $this->user_position;
        }
        function getReligionStatus(){
            return $this->religionstatus;
        }
        function getBeforeMarriageStatus(){
            return $this->beforemarriagestatus;
        }
        function getCitizenship(){
            return $this->citizenship;
        }
        function getNationality(){
            return $this->nationality;
        }
        function getEducationLevel(){
            return $this->educationlevel;
        }
        function getAge(){
            return $this->age;
        }
        function getPhoneNumber(){
            return $this->phonenumber;
        }
        function getUserBool(){
            return $this->user;
        }
        function getId(){
            return $this->id;
        }
        

        function insertInfoToDatabase(){
            include('dbconnect.php');
            $id = isset($_GET['userid']) ? $_GET['userid'] : '';
            $spouseid = $_GET['spouseid'];
            $marriagedate = $_POST['tarikhakad'];
            $marriagetime = $_POST['masajam'] . ":" . $_POST['masaminit'];
            $marriageaddress = $_POST['tempatakad'];
            $dowrytype = $_POST['maskahwin'];
            $matchmakername = $_POST['jurunikah'];
            $guardianname = $_POST['namawali'];
            $guardianic = $_POST['waliic'];
            $guardianaddress = $_POST['alamatwali'];
            $guardiandob = $_POST['dobwali'];
            $guardianage = $_POST['umurwali'];
            $guardianrelationship = $_POST['hubungan'];
            $witness1name = $_POST['namasaksi1'];
            $witness1ic = $_POST['saksi1id'];
            $witness1age = $_POST['umursaksi1'];
            $witness1address = $_POST['alamatsaksi1'];
            $witness2name = $_POST['namasaksi2'];
            $witness2ic = $_POST['saksi2id'];
            $witness2age = $_POST['umursaksi2'];
            $witness2address = $_POST['alamatsaksi2'];
            $lafaztaliq = $_POST['taliq'];

            $sql = "INSERT INTO marriage_details (UserID, SpouseID,MarriageDate, MarriageTime, Marriage_Address, 
                                Dowry_Type, MarriageMatchMaker_Name, Guardian_Name, Guardian_IC_Number,
                                Guardian_Address, Guardian_DOB, Guardian_Age, Guardian_Relationship,
                                Witness1_Name, Witness1_IC_Number, Witness1_Age, Witness1_Address,
                                Witness2_Name, Witness2_IC_Number, Witness2_Age, Witness2_Address, Lafaz_Taliq)
                                VALUES('$id','$spouseid','$marriagedate','$marriagetime','$marriageaddress','$dowrytype',
                                '$matchmakername','$guardianname','$guardianic','$guardianaddress','$guardiandob',
                                '$guardianage','$guardianrelationship','$witness1name','$witness1ic','$witness1age',
                                '$witness1address','$witness2name','$witness2ic','$witness2age','$witness2address','$lafaztaliq');";
            mysqli_query($conn,$sql);
        }

        function createForm(){
            $id = isset($_GET['userid']) ? $_GET['userid'] : '';
            require('dbconnect.php');
            $sql = "SELECT * FROM marriage_registration WHERE UserID=$id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
             
            if($row['UserID']!==$id){
                if($id === $_POST['userid']){
                    $sql = "INSERT INTO marriage_registration (UserID) VALUES ('$id')";
                    mysqli_query($conn,$sql);
                }else{
                    $sql = "INSERT INTO marriage_registration (SpouseID) VALUES ('$id')";
                    mysqli_query($conn,$sql);
                }
            }
        }
    
        function updateForm($genderform){
            $id = isset($_GET['userid']) ? $_GET['userid'] : '';
            $tempid = $_POST['id'];
    
            if($genderform === "LELAKI"){
                if($id !== $tempid){
                    $sql = "UPDATE marriage_registration SET spouseID='$id'";
                    mysqli_query($conn,$sql);
                }
            }else if($genderform === "PEREMPUAN"){
                if($id !== $tempid){
                    $sql = "UPDATE marriage_registration SET spouseID='$id'";
                    mysqli_query($conn,$sql);
                }
            }
        }
    }
?>