<?php
    //include($_SERVER['DOCUMENT_ROOT'].'\SDW\sdd\Model\db_connect.php');
    //require($_SERVER['DOCUMENT_ROOT'].'\SDW\sdd\Controller\MarriageRegistrationInfoController.php');
    class StaffViewMarriageCard{
      public function render(){
        include_once('dbconnect.php');
        require_once('BusinessServices\Controller\StaffMarriageCardController.php');
        $id = $_GET['data'];
        $this->now = new StaffMarriageCardController();
        //$this->now->getInfo();
        $this->now->backButton();
?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="asset\css\app.css">
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
            <li class="selected"><a>Pendaftaran Perkahwinan</a></li>
                <ul class="navbar2">
                    <li><a href="index.php?action=staffViewList&userid=<?php echo $id?>">Daftar Kahwin</a></li>
                    <li><a class="selected" href="index.php?action=staffCardList&userid=<?php echo $id?>">Kad Kahwin</a></li>
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

        <!--Husband Details content-->
        <form method="post">
            <div>
              <div class="section">
              <a>Maklumat Suami</a>
              </div>
              <table class="marriageform">
                <tr>
                  <td>
                    <label for="namasuami">Nama Suami </label><br>
                    <input class="form" type="text" name="namasuami" id="namasuami" value="" disabled>
                  </td>
                  <td>
                  <label for="icsuami">Kad Pengenalan Suami </label><br>
                    <input class="form" type="text" name="icsuami" id="icsuami" value="" disabled>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="namaisteri">Nama Isteri </label><br>
                    <input class="form" type="text" name="namaisteri" id="namaisteri" value="" disabled>
                  </td>
                  <td>
                  <label for="icisteri">Kad Pengenalan Isteri </label><br>
                    <input class="form" type="text" name="icisteri" id="icisteri" value="" disabled>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="tarikhakad">Tarikh Akad Nikah * </label><br>
                    <input class="form" type="date" name="tarikhakad" id="tarikhakad" disabled>
                  </td>
                
                </tr>
              </table>
            </div>
            <div class="submitarea">
                <input class="submitbtn right-side" type="submit" name="submit4" value="Back">
            </div>
        </form>
    </div>
</body>
</html>

<?php 
      }
    }
?>
