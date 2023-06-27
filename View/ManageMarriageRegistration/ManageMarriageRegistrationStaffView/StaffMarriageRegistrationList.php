<?php

    require_once('BusinessServices\Controller\StaffMarriageRegistrationController.php');
    require_once('dbconnect.php');
    class StaffMarriageRegistrationList
    {
        public function render(){
            
            $staffid = "6001";
            $this->now = new StaffMarriageRegistrationController();
?>
            
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="asset\css\appadmin.css">

<style>
    body{
        background-color: #53a4ff;
    }
    .sidebar {  
    position: absolute;
    width: 19%;
    background-color: #53a4ff;
    }
    .navbar ul {
    margin-top: 1%;
    padding: 0;
    background-color: #53a4ff;
    position:relative;
    
}

</style>
</head>

<body>
    <!-- Banner-->

    <img src="asset\image\AdminStaff_headerMunakahat.png" class="bannerimg">

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
            <li class="selected" disabled="true"><a >Pendaftaran Perkahwinan</a></li>
                <ul class="navbar2">
                    <li><a class="selected" href="index.php?action=staffViewList&userid=<?php echo $staffid?>">Daftar Kahwin</a></li>
                    <li><a href="index.php?action=staffCardList&userid=<?php echo $staffid?>">Kad Kahwin</a></li>
                </ul>
            <li><a href="UserMainConsultationPage.php">Aduan/Khidmat Nasihat</a></li>
                
            <li><a href="/profile">Insentif</a></li>
            <li><a href="/profile">Keluar</a></li>
        </ul>
    </div>

    <!-- Top Navigation Bar-->
    <div class="top-navigation">
        <a class="navtitle left-side">Pendaftaran Perkahwinan</a>
        <a class="navtitle">>> Daftar Kahwin</a>
        <div class="right-side">
            <a class="icon"><img src="asset\image\bell.png"></a>
            <a class="icon"><img src="asset\image\profile.png"></a>
        </div>
    </div>
    <!--Main Content-->
    <div class="content">
        <!--Marriage List content-->
        <div class="right-side top-side">


        </div>
        
        <div class="marriagetable">
           <?php 
           require('dbconnect.php');
           $this->now->staffDisplayTable(); 
           ?>
        </div>
    </div>

</body>
</html>

<?php
    }
  }

?>