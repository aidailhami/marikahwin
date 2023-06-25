 <?php

  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection, 'marikahwin');

  if(isset($_POST['update']))
  {
  
    $USERIC = $_POST['UserIC'];
    $USERNAME = $_POST['User_Name'];
    $USERGENDER = $_POST['User_Gender'];
    $USERPHONENUMBER = $_POST['User_PhoneNumber'];
    $USEREMAIL = $_POST['User_Email'];

    $query = "UPDATE user  SET UserIC = '$USERIC', User_Name = '$USERNAME' , User_Gender = '$USERGENDER', User_PhoneNumber = '$USERPHONENUMBER', User_Email =  '$USEREMAIL' ;";

    $query_run = mysqli_query($connection,$query);

   
  ?>
