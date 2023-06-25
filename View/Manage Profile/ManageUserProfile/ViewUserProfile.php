<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>User Profile</title>
    <style>
   body {
    color: black;
    font-family: Arial, Helvetica, sans-serif;
    background-color: #30d5c8;
}

.sidebar {
    position: absolute;
    width: 19%;
    background-color: #30d5c8;
}

.sidebar ul{
    list-style-type:none;
}

.user li{
    margin-left:20px;
}

.navbar li a:hover{
    background-color: #c5ac1f;
    color: white;
    border-radius: 8px;
}

.selected {
    background-color: white;
    border-radius: 8px;
}

.disabled {
    pointer-events: none;
}

.navbar li a{
    display: block;
    color: #000;
    padding: 8px 20px;
    text-decoration: none;
}

.navbar ul {
    margin-top: 1%;
    padding: 0;
    background-color: #30d5c8;
    position:relative;
}

.navbar2 li{
    display: block;
    margin-left:20%;
}


.btn {
    background-color: #5D87FF;
    border: 0px;
    display: block;
    color:white;
    padding: 5px 15px;
    border-radius: 5px;
    margin-bottom: 10px;
}

.btn:active {
    border: 1px solid white;
}


.bannerimg {
    width:100%;
}

.content {
    border: 1px solid #30d5c8;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    margin-left:21%;
    padding-top:1%;
    padding-right: 2%;
    padding-left: 2%;
    padding-bottom: 4%;
    background-color:white;
}

.top-navigation {
    border: 1px solid #179389;
    background-color: #7ae1d9;
    height: 50px;
    margin-left: 21%;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    vertical-align: middle;
    line-height:50px;
}

.navblock {
    display:inline-flex;
    text-align: justify;
    margin-left: 2%;
    border: 1px solid black;
}

.left-side {
    float: left;
    margin-left: 1%;
}

.navtitle {
    font-size: 25px;
    font-weight:700;
    margin-left: 2%;
}

.right-side {
    float: right;
    margin-right: 1%;
}

.icon img{
    vertical-align: middle;
    margin-right: 20px;
    max-width: 30px;
    max-height: 30px;
}


.form {
    width: 520px;
} 

.form.option {
    width: 520px;
} 

.UserProfileView{
    padding-top: 50px;

}

.star{
    color:red;

}

label{
    
    display: inline-block;
    width: 350px;
    margin-left: 150px;
    text-align: left;
    font-weight: bold;
    padding: 10px 10px;
    padding-top: 20px;
    
}

input[type=text]{
    border:1px solid;
    text-align: center;
    margin: 6px;
    width: 200px;
    padding: 6px 10px;
    border-radius: 5px;
    border-color:grey;

}

                
input[type=email]{
    border:1px solid;
    text-align: center;
    margin: 6px;
    width: 200px;
    padding: 6px 10px;
    border-radius: 5px;
    border-color:grey;

}

.submitarea {
    text-align: center;
    margin:10px;
    padding-top: 30px;
   
} 

.submitbtn {
    background-color: #30d5c8;
    color: black; 
    width:150px; 
    height: 35px; 
    border-color: #30d5c8; 
    border-radius: 10px;
    font-weight:bold;
}


        </style>

</head>

<body>
    <!-- Banner-->
    <img src="../../../asset/User_headerMunakahat.png" class="bannerimg">
    <!-- Side Navigation Bar-->
    <div class="sidebar">
        <ul class="user">
            <li>ID:</li>
            <li>Nama:</li>
        </ul>
        <ul class="navbar">
            <li class="selected"><a href="/">Profil</a></li>
            <li><a href="contact">Daftar Kursus Perkahwinan</a></li>
            <li><a href="contact">Permohonan Perkahwinan</a></li>
            <li><a href="MarriageRegistration.php" >Pendaftaran Perkahwinan</a></li>
            <li><a href="UserMainConsultationPage.php">Aduan/Khidmat Nasihat</a></li>
                
            <li><a href="/profile">Insentif</a></li>
            <li><a href="/profile">Keluar</a></li>
        </ul>
    </div>

    <!-- Top Navigation Bar-->
    <div class="top-navigation">
        <a class="navtitle left-side">Profil</a>
        <div class="right-side">
            <a class="icon"><img src="../../../asset/bell.png"></a>
            <a class="icon"><img src="../../../asset/profile.png"></a>
        </div>
    </div> 
    <!--Main Content-->
    <div class="content">
        <!--User Profile content-->
        <form class="UserProfileView" method="POST" action="../BusinessServices/Controller/ManageUserProfile/UserController.php">
                    <label for="IC">No. Kad Pengenalan</label><a>: &nbsp;</a>
                    <input type="text" id="UserIC" name="UserIC">
                 <br>
                    <label for="name">Nama <a class="star">*</a> </label><a>: &nbsp;</a>
                    <input type="text" id="UserName" name="UserName" required>&nbsp;&nbsp;<a href="EditUserProfileForm.php"><i class='fas fa-pencil-alt' style='font-size:24px;color:grey'></i></a>
                  <br>
                    <label for="gender">Jantina </label><a>: &nbsp;</a>
                    <input type="text" class id="UserGender" name="UserGender">
                  <br>
                    <label for="phonenum">No. telefon <a class="star">*</a> </label><a>: &nbsp;</a>
                    <input type="text" class id="UserPhoneNumber" required name="UserPhoneNumber>&nbsp;&nbsp;<a href="EditUserProfileForm.php"><i class='fas fa-pencil-alt' style='font-size:24px;color:grey'></i></a>
                    <br>
                    <label for="email">Email <a class="star">*</a> </label><a>: &nbsp;</a>
                    <input type="email" class id="UserEmail" required name="UserEmail">&nbsp; &nbsp;<a href="EditUserProfileForm.php"><i class='fas fa-pencil-alt' style='font-size:24px;color:grey'></i></a>
                    <br><br><br>
        </form>
    </div>
</body>
</html>
