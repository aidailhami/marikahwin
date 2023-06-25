<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login Staff View</title>
    <style>
    body{
            background-color: #53A4FF;
        
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

    .StaffLoginForm{
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

    select,option{
        padding: 10px 215px;
        border-radius: 8px;
        border-color: #C1C3C3;
        background-color: white ;
        border-style: solid;
    }

    label{
        display: inline-block;
        width: 500px;
        text-align:left;
        
    }


    input[value = "Lupa Kata Laluan"]{
        background-color: #F5F2D3;
        padding: 10px 180px;
        text-align: center;
        border: 1px solid;
        color:black;
        border-radius: 5px;
        font-size: 17px;
        border-color: #C1C3C3;
    
    }

    input[value = "Tukar Kata Laluan"]{
        background-color: #F9EE8F;;
        padding: 10px 180px;
        text-align: center;
        border: 1px solid;
        color:black;
        border-radius: 5px;
        font-size: 17px;
        border-color: #C1C3C3;
    
    }
    
       
    

    button{
        background-color: black;
        padding: 10px 220px;
        text-align: center;
        border: none;
        color:white;
        font-weight: bold;
        border-radius: 5px;
        font-size: 20px;
     
       
    }


    .image{
        padding-top:100px;

    }

    .h1{
        font-size:30px;
        font-family:sans-serif;
        text-align: left;
        font-weight: bold;
        float:left;
        padding-top:25px;
    }

    .logo{
        object-fit:cover;
        position: absolute;
        top: 0px;
        right: 0px;
        left:0px;

    }

   
    </style>
   
</head>
<body>
<div class="logo"><img src="../../../asset/User_headerMunakahat.png" style= "width:100%; height: 10%"  ></div>
<div class="image">
        <img src="../../../asset/background.png" style="width:1300px;height: 600px">
</div>
<div class="container">
<form class="StaffLoginForm" method="POST" action="../BusinessServices/Controller/StaffController.php">
    <div class="FormHeader"><a class="h1">Log Masuk Kakitangan </a> <img class="imgicon" src="../../../asset/AdminStaffIcon.png" width="100px" height="100px"></i></div>
        <label>Login As:</label><br>
        <select>
            <option value="Admin">Admin</option>
            <option value="Staff">Staff</option>
        </select><br>
        <label>No Kad Pengenalan: </label><br>
        <input type="text" id="StaffIC" name="StaffIC" required><br>
        <label>Kata Laluan: </label><br>
        <input type="password" id="StaffPassword" name="StaffPassword" minlength="12" required><br>
    <br>
  <button type="submit">Login</button> <br><br>
  <input type="button" value="Lupa Kata Laluan" onclick="window.location.href='../ManageStaffLogin/StaffForgotPasswordForm.php';">
  <br><br><input type="button" value="Tukar Kata Laluan" onclick="window.location.href='../ManageStaffLogin/StaffChangePasswordForm.php';">
  
  
</form>

</div>
</body>
</html>
