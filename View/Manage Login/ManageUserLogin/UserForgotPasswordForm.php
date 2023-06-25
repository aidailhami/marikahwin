<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Forgot Password | User </title>
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
        top: 30%;
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


    label{
        display: inline-block;
        width: 250px;
        text-align:left;
        font-weight:bold;
        font-family: sans-serif;
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

    .ForgotPasswordUserForm{
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

    .ForgotPasswordUser{
        position: relative;
        text-align: center;
        color: black;
    }

    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-30%, -50%);
        font-family: Inika;
        font-size:22px;

    }

    .fa-user{
        float:left;
        padding-top:40px;
        padding-left: 60px;

    }

    </style>
  
</head>
<body>
<div class="logo"><img src="../../../asset/User_headerMunakahat.png" style= "width:100%; height: 10%"  ></div>
    <div class="image">
        <img src="../../../asset/background.png" style="width:1300px;height: 510px">
</div>
<div class="container">
<form class="ForgotPasswordUserForm" method="POST" action="../index.php">
<i class="fa fa-user" style="font-size:36px" ></i>&nbsp;
    <div class="ForgotPasswordUser"><img src="../../../asset/shape.png" width="260px" height="80px"><div class="centered"><strong>LUPA KATA LALUAN ? </strong></div></div>
        <br><br><label>No. Kad Pengenalan</label><a>: &nbsp;</a>
        <input type="text" id="UserIC" name="UserIC" placeholder="010203074567" pattern="[0-9]{12}" required><br><br>
        <label>Hantar Ke Email</label><a>: &nbsp;</a>
        <input type="email" name="UserEmail" id="UserEmail"><br><br>
    
  <button type="submit">Hantar Kata Laluan</button> <br><br><br><br>

</form>
</div>
</body>
</html>