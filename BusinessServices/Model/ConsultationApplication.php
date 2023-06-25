<?php 
include 'db_connect.php';

$userID=1003;

//SQL query
$sql = "SELECT * FROM user 
INNER JOIN spouse_details ON user.UserID=user.UserID=spouse_details.UserID
INNER JOIN marriage_consultation ON user.UserID=user.UserID=marriage_consultation.UserID 
INNER JOIN consultation_session ON user.UserID=user.UserID=consultation_session.UserID 
INNER JOIN wali_details ON user.UserID=user.UserID=wali_details.UserID 
WHERE user.UserID=$userID"
or die(mysqli_connect_error());

//Execute the query (the recordset $rs contains the result)
$result = mysqli_query($conn, $sql);

//Select the database.
mysqli_select_db($conn, "marikahwin") or die(mysqli_error($conn));

    $usermarriageCount = $_POST["usermarriageCount"];
    $spouseic = $_POST["spouseic"];
    $spousename = $_POST["spousename"];
    $spousedob = $_POST["spousedob"];
    $spouserace = $_POST["spouserace"];
    $spouseaddress = $_POST["spouseaddress"];
    $spousephoneNum = $_POST["spousephoneNum"];
    $spousejob_sector = $_POST["spousejob_sector"];
    $spousejob_position = $_POST["spousejob_position"];
    $spousesalary = $_POST["spousesalary"];
    $spouseedulevel = $_POST["spouseedulevel"];
    $spousemarriageCount = $_POST["spousemarriageCount"];
    $marriageType = $_POST["marriageType"];
    $wifecount = $_POST["wifecount"];
    $marriagereasoning = $_POST["marriagereasoning"];
    $soncount = $_POST["soncount"];
    $daughtercount = $_POST["daughtercount"];
    $divorce = $_POST["divorce"];
    $talaqcount = $_POST["talaqcount"];
    $divorceDate = $_POST["divorceDate"];
    $rujuDate = $_POST["rujuDate"];
    $remarryDate = $_POST["remarryDate"];
    $waliic = $_POST["waliic"];
    $waliname = $_POST["waliname"];
    $walidob = $_POST["walidob"];
    $walirace = $_POST["walirace"];
    $waliaddress = $_POST["waliaddress"];
    $waliphoneNum = $_POST["waliphoneNum"];
    $walijob_sector = $_POST["walijob_sector"];
    $walijob_position = $_POST["walijob_position"];
    $walisalary = $_POST["walisalary"];
    $waliedulevel = $_POST["waliedulevel"];
    $desc = $_POST["desc"];
    
    $expert_ID=3001;
    //$pid2 = $_POST["id2"];

function insertData(){
    $query="INSERT INTO spouse_details(UserID,SpouseIC,Spouse_Name,Spouse_PhoneNumber,Spouse_DOB,Spouse_CurrentAddress,Spouse_EducationLevel,Spouse_Salary,Spouse_JobSector,Spouse_Position,Spouse_Nationality) 
    VALUES ('$userID','$spouseic','$spousename','$spousephoneNum','$spousedob','$spouseaddress','$spouseedulevel','$spousesalary','$spousejob_sector','$spousejob_position','$spouserace',";
}

function updateData(){
    $query="UPDATE spouse_details,marriage_consultation,wali_details 
    SET spouse_details.UserID=$userID, spouse_details.SpouseIC=$spouseic, spouse_details.Spouse_Name=$spousename,spouse_details.Spouse_PhoneNumber=$spousephoneNum, spouse_details.Spouse_DOB=$spousedob, 
    spouse_details.Spouse_CurrentAddress=$spouseaddress, spouse_details.Spouse_EducationLevel=$spouseedulevel, spouse_details.Spouse_Salary=$spousesalary, spouse_details.Spouse_JobSector=$spousejob_sector, 
    spouse_details.Spouse_Position=$spousejob_position, spouse_details.Spouse_Nationality=$spouserace,
    ";
}

?>
    