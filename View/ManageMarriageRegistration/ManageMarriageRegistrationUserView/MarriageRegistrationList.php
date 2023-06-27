<?php

    require_once('BusinessServices\Controller\UserMarriageRegistrationController.php');
    require_once('dbconnect.php');
    class MarriageRegistrationList
    {
        public function render(){
            $id = isset($_GET['userid']) ? $_GET['userid'] : '';
            $this->now = new UserMarriageRegistrationController();
?>
            
<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" href="asset\css\app.css">

</head>

<body>
    <!-- Banner-->

    <img src="asset\image\User_headerMunakahat.png" class="bannerimg">

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
                    <li><a class="selected" href="index.php?action=viewList&userid=<?php echo $id?>">Daftar Kahwin</a></li>
                    <li><a href="index.php?action=cardList&userid=<?php echo $id?>">Kad Kahwin</a></li>
                </ul>
            <li><a href="">Aduan/Khidmat Nasihat</a></li>
                
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

            <a href="index.php?action=formHusband&userid=<?php echo $id?>"><button type="submit" class="btn">Daftar Baru</button></a>

        </div>
        
        <div class="marriagetable">
           <?php 
           require('dbconnect.php');
        
           $this->now->displayTable(); 
           ?>
        </div>
    </div>

</body>
</html>

<?php
    }
  }

?>