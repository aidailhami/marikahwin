<?php 
include 'db_connect.php';

//SQL query
$sql = "SELECT * FROM user 
INNER JOIN spouse_details ON user.UserID=user.UserID=spouse_details.UserID
INNER JOIN marriage_consultation ON user.UserID=user.UserID=marriage_consultation.UserID 
INNER JOIN application_status ON application_status.Status_ID=user.UserID=marriage_consultation.Status_ID 
INNER JOIN consultation_session ON user.UserID=user.UserID=consultation_session.UserID 
INNER JOIN wali_details ON user.UserID=user.UserID=wali_details.UserID 
WHERE user.UserID=1003"
or die(mysqli_connect_error());

//Execute the query (the recordset $rs contains the result)
$result = mysqli_query($conn, $sql);

?>

