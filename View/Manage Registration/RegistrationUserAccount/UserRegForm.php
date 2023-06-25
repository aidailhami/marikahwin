<?php 

    include_once('../../../helpers/session_helper.php');
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>User Registration</title>
    <style>

    body{
            background-color: turquoise;
        
        }

    .container {
        border-radius: 15px;
        background-color: #f2f2f2;
        padding: 10px;
        box-shadow: 5px 5px grey;
        position:absolute;
        top: 20%;
        right:40px;
        width:45%;
        text-align:center;

    }

    .image{
        padding-top:100px;

    }

    input{
        padding: 10px 20px;
        border-radius: 8px;
        border-color: #C1C3C3;
        background-color: #f2f2f2;
        border-style: solid;
    }

    select,option{
        padding: 10px 35px;
        border-radius: 8px;
        border-color: #C1C3C3;
        background-color: #f2f2f2 ;
        border-style: solid;
    }

    label{
        display: inline-block;
        width: 250px;
        text-align:left;
    }

    input[type=button]{
        background-color: #B7b7b7;
        padding: 15px 120px;
        text-align: center;
        border: none;
        color:black;
        font-weight: bold;
        border-radius: 45px;
        font-size: 20px;
    
    }

    button{
        background-color: #2cd4d4;
        padding: 15px 80px;
        text-align: center;
        border: none;
        color:black;
        font-weight: bold;
        border-radius: 45px;
        font-size: 20px;
       
    }

    .UserRegisterForm{
        display:inline-block;
        text-align: center;
        font-family: "Times New Roman", Times, serif;
        font-size: 20px;


    }

    .logo{
        object-fit:cover;
        position: absolute;
        top: 0px;
        right: 0px;
        left:0px;

    }

    .DaftarPengguna{
        position: relative;
        text-align: center;
        color: black;
    }

    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-30%, -50%);
    }

    .fa-user{
        float:left;
        padding-top:25px;
        padding-left: 60px;

    }

    .message{
        background-color:palevioletred;
    }
   
    </style>
    

</head>
<body>
   
<div class="logo"><img src="../../Assets/User_headerMunakahat.png" style= "width:100%; height: 10%"  ></div>
<div class="image">
        <img src="../../Assets/background.png" style="width:1300px;height: 710px">
</div>

<div class="container">
    <div class="message">
    <?php flash('register') ?>
    </div>
<form class="UserRegisterForm" method="POST" action="../../../index.php">
<input type="hidden" name="type" value="register">
<i class="fa fa-user" style="font-size:36px" ></i>&nbsp;
<div class="DaftarPengguna"><img src="../../Assets/shape.png" width="200px" height="70px"><div class="centered"><strong>DAFTAR PENGGUNA</strong></div></div>
        <br><label><strong>No. Kad Pengenalan</strong></label><a>: &nbsp;</a>
        <input type="text" id="UserIC" name="UserIC" placeholder="010203074567" pattern="[0-9]{12}" required><br><br>
        <label><strong>Nama</label><a>: &nbsp;</a>
        <input type="text" id="UserName" name="UserName" required><br><br>
        <label><strong>Jantina</strong></label><a>: &nbsp;</a>
        <select id="UserGender"  name="UserGender">
            <option value="" selected disabled>Select Your Gender</option>
            <option value="lelaki">Lelaki</option>
            <option value="perempuan">Perempuan</option>
        </select><br><br>
        <label><strong>No. Telefon</strong></label><a>: &nbsp;</a>
        <input type="text" id="UserPhoneNumber" name="UserPhoneNumber" required><br><br>
        <label><strong>Emel</strong></label><a>: &nbsp;</a>
        <input type="email" id="UserEmail" name="UserEmail" required><br><br>
        <label><strong>Kata Laluan Baru</strong></label><a>: &nbsp;</a>
        <input type="password" id="UserPassword" name="UserPassword" minlength="12" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[#?!@$%^&*-]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 12 or more characters" required><br><br>
        <label><strong>Ulangan Kata Laluan Baru</strong></label><a>: &nbsp;</a>
        <input type="password" id="UserConfirmPassword" name="UserConfirmPassword" minlength="12" required><br><br>
    
  <button type="submit">Daftar Pengguna</button> <br><br>
  <input type="button" value="Kembali" onclick="history.go(-1);">
</form>
</div>
</body>
</html>
