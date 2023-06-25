<?php
 include_once '../../../helpers/session_helper.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login | User View</title>
    <style>
    body{
            background-color: turquoise;
        
        }

    .container {
        border-radius: 15px;
        background-color: #FFFDD0;
        padding: 10px;
        position:absolute;
        top: 30%;
        right:40px;
        width:45%;
        text-align:center;

    }

    .UserLoginForm{
        display:inline-block;
        text-align: center;
        font-family: "Times New Roman", Times, serif;
        font-size: 20px;


    }

    input{
        padding: 10px 160px;
        border-radius: 8px;
        border-color: #C1C3C3;
        background-color: white;
        border-style: solid;
        padding-bottom: 20px;
        text-align: center;

    }

    label{
        display: inline-block;
        width: 500px;
        text-align:left;
        font-weight: bold;
        font-size:20px;
        font-family:sans-serif;
        padding-top: 20px;

    }

    input[type=button]{
        background-color: #FFFDD0;
        padding: 10px 30px;
        text-align: center;
        border: 1px solid;
        color:black;
        border-radius: 5px;
        font-size: 17px;
        border-color: #C1C3C3;
    
    }

    button{
        background-color: black;
        padding: 10px 210px;
        text-align: center;
        border: none;
        color:white;
        font-weight: bold;
        border-radius: 5px;
        font-size: 20px;
     
       
    }

   

    .logo{
        object-fit:cover;
        position: absolute;
        top: 0px;
        right: 0px;
        left:0px;

    }

    .image{
        padding-top:100px;

    }

    h1{
        font-size:30px;
        font-family:sans-serif;
        text-align: left;
    }

    </style>
   
</head>
<body>

<div class="logo"><img src="../../../asset/User_headerMunakahat.png" style= "width:100%; height: 10%"  ></div>
<div class="image">
        <img src="../../../asset/background.png" style="width:1300px;height: 570px">
</div>
<div class="container">
<?php flash('login') ?>
<form class="UserLoginForm" method="POST" action="../../../index.php">
    <input type="hidden" name="type" value="login">
    <div class="FormHeader"><i class="fa fa-user" style="font-size:36px" ></i><br><br><h1>Log Masuk</h1></div>
    <br>
        <label>No Kad Pengenalan: </label><br>
        <input type="text" id="UserIC" name="UserIC" pattern="[0-9]{12}" required><br>
        <label>Kata Laluan: </label><br>
        <input type="password" id="UserPassword" name="UserPassword" minlength="12" required><br>
    <br>
  <button type="submit">Login</button> <br><br>
  <input type="button" value="Daftar" onclick="window.location.href='../../../View/ManageRegistration/RegistrationUserAccount/UserRegForm.php';">
  <input type="button" value="Tukar Kata Laluan" onclick="window.location.href='../../../View/ManageLogin/ManageUserLogin/UserChangePasswordForm.php';">
  <input type="button" value="Lupa Kata Laluan" onclick="window.location.href='../../../View/ManageLogin/ManageUserLogin/UserForgotPasswordForm.php';">
                                                              
</form>
</div>

</body>
</html>
