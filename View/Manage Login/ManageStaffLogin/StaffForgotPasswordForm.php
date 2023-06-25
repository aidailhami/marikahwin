<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Forgot Password | Staff </title>
    <style>
    body{
            background-color: #53A4FF;
        
        }

    .container {
        border-radius: 15px;
        background-color: white;
        padding: 10px;
        box-shadow: 5px 5px grey;
        position:absolute;
        top: 20%;
        right:0px;
        width:50%;
        text-align:center;


    }


    input{
        padding: 10px 20px;
        border-radius: 8px;
        border-color: #C1C3C3;
        background-color: white;
        border-style: solid;
    }


    label{
        display: inline-block;
        width: 200px;
        text-align:left;
        font-weight: bold;
        font-size:20px;
        font-family:sans-serif;
        padding-top: 20px;
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

    .ForgotPasswordStaffForm{
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

    
    .image{
        padding-top:100px;

    }
    </style>
   
</head>
<body>
<div class="logo"><img src="../../../asset/AdminStaff_headerMunakahat.png" style= "width:100%; height: 10%"  ></div>
    <div class="image">
        <img src="../../../asset/background.png" style="width:1300px;height: 580px">
</div>
<div class="container">
<form class="ForgotPasswordStaffForm" method="POST" action="../BusinessController/Controller/StaffController.php">
    <div class="FormHeader"><img class="imgicon" src="../../../asset/AdminStaffIcon.png" width="100px" height="100px">&nbsp;  &nbsp;<strong>LUPA KATA LALUAN ?</strong></div>
       <br> <br><br><label>No. Kad Pengenalan</label><a>: &nbsp;</a>
        <input type="text" id="StaffIC" name="StaffIC" placeholder="010203074567" pattern="[0-9]{12}" required><br><br>
        <label>Hantar Ke Email</label><a>: &nbsp;</a>
        <input type="email" id="StaffEmail" name="StaffEmail">
    <br><br><br><br><br><br>
  <button type="submit">Hantar Kata Laluan</button> <br><br><br><br>

</form>
</div>
</body>
</html>
