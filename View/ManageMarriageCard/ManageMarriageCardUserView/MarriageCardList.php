<?php

    require_once('BusinessServices\Model\Application.php');
    require_once('dbconnect.php');
    class MarriageCardList
    {
        public function render(){
            //$id = $_GET['userid'];
            $id = "1001";
            $this->now = new Application();
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
                    <li><a href="index.php?action=viewList&userid=<?php echo $id?>" >Daftar Kahwin</a></li>
                    <li><a class="selected" href="index.php?action=cardList&userid=<?php echo $id?>">Kad Kahwin</a></li>
                </ul>
            <li><a href="UserMainConsultationPage.php">Aduan/Khidmat Nasihat</a></li>
                
            <li><a href="/profile">Insentif</a></li>
            <li><a href="/profile">Keluar</a></li>
        </ul>
    </div>

    <!-- Top Navigation Bar-->
    <div class="top-navigation">
        <a class="navtitle left-side">Pendaftaran Perkahwinan</a>
        <a class="navtitle">>> Kad Nikah</a>
        <div class="right-side">
            <a class="icon"><img src="asset\image\bell.png"></a>
            <a class="icon"><img src="asset\image\profile.png"></a>
        </div>
    </div>
    <!--Main Content-->
    <div class="content">
        <!--Marriage List content-->
        <div class="right-side top-side">

            <a href="index.php?action=marriageCardForm&userid=<?php echo $id?>"><button type="submit" class="btn">Daftar Baru</button></a>

        </div>
        
        <div class="marriagetable">
           <?php 
           require('dbconnect.php');
           $this->now->displayTableCard(); 
           ?>
        </div>
    </div>

</body>
</html>

<?php
    }
  }

?>