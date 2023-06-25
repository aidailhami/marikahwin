<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INCENTIVE-SEMAKPAGE</title>
  <link rel="stylesheet" href="../Stylesheet/pageStyle.css">
</head>

<body>
  <!--Banner-->
  <img src="../asset/User_headerMunakahat.png" class="bannerimg">

  <!-- Side Navigation Bar-->
  <div class="sidebar">
    <ul class="user">
        <li>ID:</li>
        <li>Nama:</li>
    </ul>
    <ul class="navbar">
        <li><a href="/">Profil</a></li>
        <li><a href="contact">Daftar Kursus Perkahwinan</a></li>
        <li><a href="contact">Permohonan Perkahwinan</a></li>
        <li><a href="contact" >Pendaftaran Perkahwinan</a></li>    
        <li><a href="/profile">Aduan/Khidmat Nasihat</a></li>  

        <li class="selected"><a href="../View/1)IncentiveApplicationMenu.php">Insentif</a></li>
        <ul class="navbar2">
          <li><a class="selected" href="../View/3)IncentiveApplicationForm(1).php">Permohonan Baru</a></li>
          <li><a class="selected" href="">Hantar Permohonan</a></li>
        </ul>
        <li><a href="/profile">Keluar</a></li>
    </ul>
  </div>

  <!-- Top Navigation Bar-->
 <div class="top-navigation">
  <a class="navtitle left-side">Permohonan Insentif</a>
  <a class="navtitle">>> Permohonan Baru</a>
  <div class="right-side">
      <a class="icon"><img src="../asset/bell.png"></a>
      <a class="icon"><img src="../asset/profile.png"></a>
  </div>
  </div>
  <!-- Content-->
  <div class="content">
  
  <?php

  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection, 'marikahwin');

  if(isset($_POST['simpan']))
  {
    $USERNAME = $_POST['User_Name'];
    $USERIC = $_POST['UserIC'];
    $USERGENDER = $_POST['User_Gender'];
    $USERPHONENUMBER = $_POST['User_PhoneNumber'];
    $USERDOB = $_POST['User_DOB'];
    $USEREMAIL = $_POST['User_Email'];
    $USERAGE = $_POST['User_Age'];
    $USERCURRENTADDRESS = $_POST['User_CurrentAddress'];
    $USERICADDRESS = $_POST['User_ICAddress'];
    $USEREDULEVEL = $_POST['User_EducationLevel'];
    $USERSALARY = $_POST['User_Salary'];
    $USERJOBSECTOR = $_POST['User_JobSector'];
    $USERPOSITION = $_POST['User_Position'];
    $USERRELIGION = $_POST['User_ReligionStatus'];
    $USERCITIZENSHIP = $_POST['User_Citizenship'];
    $USERNATIONALITY = $_POST['User_Nationality'];
    $SPOUSENAME = $_POST['Spouse_Name'];
    $SPOUSEAGE = $_POST['Spouse_Age'];
    $SPOUSEIC = $_POST['SpouseIC'];
    $SPOUSESALARY = $_POST['Spouse_Salary'];
    $SPOUSEJOBSECTOR = $_POST['Spouse_JobSector'];
    $SPOUSEPOSITION = $_POST['Spouse_Position'];

    $query = "INSERT into incentive_data values ('$USERIC', '$USERNAME', '$USERGENDER', '$USERPHONENUMBER', '$USERDOB ', '$USEREMAIL', ' $USERAGE', '$USERCURRENTADDRESS', 
    '$USERICADDRESS', '$USEREDULEVEL', '$USERSALARY', '$USERJOBSECTOR', '$USERPOSITION', '$USERRELIGION', '$USERCITIZENSHIP', '$USERNATIONALITY', '$SPOUSENAME', 
    '$SPOUSEAGE', '$SPOUSEIC', '$SPOUSESALARY', '$SPOUSEJOBSECTOR', '$SPOUSEPOSITION', 'PENDING' ) ";

    $query_run = mysqli_query($connection,$query);

    if($query_run) 
	    {
        ?>
          <button class="mohonbaru-button">PERMOHONAN BERJAYA DIHATAR</button><br><br><br><br><br><br><hr><br><br>
          <input type="button" onclick="location.href='../View/3)IncentiveApplicationForm(1).php';" value="KEMBALI" class="kiri-button">  
				<?php
		  }
		else 
	    {
        ?>
          <button class="mohonbaru-button">PERMOHONAN GAGAL DIHANTAR</button><br><br><br><br><br><br><hr><br><br>
          <input type="button" onclick="location.href='../View/3)IncentiveApplicationForm(1).php';" value="KEMBALI" class="kiri-button">  
        <?php          
	    }
  }
  ?>
  </div>
</body>
</html>