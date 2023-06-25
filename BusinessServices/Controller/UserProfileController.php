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

    $query = "INSERT into user (UserIC,User_Name, User_Gender, User_PhoneNumber, User_Email) values ('$USERIC', '$USERNAME', '$USERGENDER', '$USERPHONENUMBER', '$USEREMAIL' ) ";

    $query_run = mysqli_query($connection,$query);

   
  ?>
