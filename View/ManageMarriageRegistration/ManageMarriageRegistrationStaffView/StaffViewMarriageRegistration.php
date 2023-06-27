<?php
    //include($_SERVER['DOCUMENT_ROOT'].'\SDW\sdd\Model\db_connect.php');
    //require($_SERVER['DOCUMENT_ROOT'].'\SDW\sdd\Controller\MarriageRegistrationInfoController.php');
    class StaffViewMarriageRegistration{
      public function render(){
        include_once('dbconnect.php');
        require_once('BusinessServices\Controller\StaffMarriageRegistrationController.php');
        $this->now = new StaffMarriageRegistrationController();
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
                    <li><a class="selected" href="index.php?action=viewList">Daftar Kahwin</a></li>
                    <li><a href="">Kad Kahwin</a></li>
                </ul>
            <li><a href="UserMainConsultationPage.php">Aduan/Khidmat Nasihat</a></li>
                
            <li><a href="/profile">Insentif</a></li>
            <li><a href="/profile">Keluar</a></li>
        </ul>
    </div>

    <!-- Top Navigation Bar-->
    <div class="top-navigation">
        <a class="navtitle left-side">Pendaftaran Perkahwinan</a>
        <a class="navtitle">>> Maklumat Perkahwinan</a>
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
                    <label for="nama">Nama Suami * </label><br>
                    <input class="form" type="text" name="nama" id="nama" value="" disabled>
                    
                  </td>
                  <td>
                    <label for="kadpengenalan">No. Kad Pengenalan * </label><br>
                    <input class="form" type="text" name="kadpengenalan" id="kadpengenalan" value="" disabled>
                    
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="tarikh">Tarikh Lahir * </label><br>
                    <input class="form" type="text" name="tarikh" id="tarikh" value="" disabled>
                    
                  </td>
                  <td>
                    <label for="umur">Umur </label><br>
                    <input class="form" type="text" name="umur" id="umur" value="" disabled> 
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="warganegara">Warganegara * </label><br>
                      <input class="form" type="text" name="warganegara" id="warganegara" value="" disabled>
                  </td>
                  <td>
                    <label for="taraf">Taraf Pendidikan * </label><br>
                      <input class="form" type="text" name="taraf" id="taraf" value="" disabled>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="bangsa">Bangsa * </label><br>
                    <input class="form" type="text" name="bangsa" id="bangsa" value="" disabled>
                  </td>
                  <td>
                    <label for="status">Status Sebelum Berkahwin * </label><br>
                    <input class="form" type="text" name="status" id="status" value="" disabled>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="textaddress1">Alamat Dalam K/P * </label><br>
                      <textarea class="form" name="textaddress1" id="textaddress1" disabled></textarea><br>
                    </td>
                  <td>
                    <label for="textaddress2">Alamat Terkini * </label><br>
                    <textarea class="form" name="textaddress2" id="textaddress2" disabled></textarea><br>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="sektor">Sektor Pekerjaan * </label><br>
                    <input class="form" type="text" name="sektor" id="sektor" value="" disabled>
                  </td>
                  <td>
                    <label for="pekerjaan">Nama Pekerjaan * </label><br>
                      <input class="form" type="text" name="pekerjaan" id="pekerjaan" value="" disabled>
                     
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="pendapatan">Pendapatan (RM) * </label><br>
                    <input class="form" type="text" name="pendapatan" id="pendapatan" value="" disabled>
                      
                  </td>
                  <td>
                    <label for="telefon">No. Telefon * </label><br>
                    <input class="form" type="text" name="telefon" id="telefon" value="" disabled>
                      
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="saudara">Saudara Baru </label><br>
                    <input class="form" type="text" name="saudara" id="saudara" value="" disabled>
                  </td>
                </tr>
              </table>

              <div class="section">
              <a>Maklumat Isteri</a>
              </div>
              <table class="marriageform">
                <tr>
                  <td>
                    <label for="nama">Nama Isteri * </label><br>
                    <input class="form" type="text" name="nama" id="nama" value="" disabled>
                    
                  </td>
                  <td>
                    <label for="kadpengenalan">No. Kad Pengenalan * </label><br>
                    <input class="form" type="text" name="kadpengenalan" id="kadpengenalan" value="" disabled>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="tarikh">Tarikh Lahir * </label><br>
                    <input class="form" type="text" name="tarikh" id="tarikh" value="" disabled>
                    
                  </td>
                  <td>
                    <label for="umur">Umur </label><br>
                    <input class="form" type="text" name="umur" id="umur" value="" disabled> 
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="warganegara">Warganegara * </label><br>
                      <input class="form" type="text" name="warganegara" id="warganegara" value="" disabled>
                  </td>
                  <td>
                    <label for="taraf">Taraf Pendidikan * </label><br>
                      <input class="form" type="text" name="taraf" id="taraf" value="" disabled >
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="bangsa">Bangsa * </label><br>
                    <input class="form" type="text" name="bangsa" id="bangsa" value="" disabled>
                  </td>
                  <td>
                    <label for="status">Status Sebelum Berkahwin * </label><br>
                    <input class="form" type="text" name="status" id="status" value="" disabled>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="textaddress1">Alamat Dalam K/P * </label><br>
                      <textarea class="form" name="textaddress1" id="textaddress1" disabled></textarea>
                    </td>
                  <td>
                    <label for="textaddress2">Alamat Terkini * </label><br>
                    <textarea class="form" name="textaddress2" id="textaddress2" disabled></textarea>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="sektor">Sektor Pekerjaan * </label><br>
                    <input class="form" type="text" name="sektor" id="sektor" value="" disabled>
                  </td>
                  <td>
                    <label for="pekerjaan">Nama Pekerjaan * </label><br>
                      <input class="form" type="text" name="pekerjaan" id="pekerjaan" value="" disabled>
                     
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="pendapatan">Pendapatan (RM) * </label><br>
                    <input class="form" type="text" name="pendapatan" id="pendapatan" value="" disabled>
                      
                  </td>
                  <td>
                    <label for="telefon">No. Telefon * </label><br>
                    <input class="form" type="text" name="telefon" id="telefon" value="" disabled>
                      
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="saudara">Saudara Baru </label><br>
                    <input class="form" type="text" name="saudara" id="saudara" value="" disabled>
                  </td>
                </tr>
              </table>
              <div class="section">
              <a>Maklumat Perkahwinan</a>
              </div>
              <table class="marriageform">
                <tr>
                  <td>
                    <label for="tarikhmohon">Tarikh Mohon </label><br>
                    <input class="form" type="text" name="tarikhmohon" id="tarikhmohon" value="" disabled>
                  </td>
                  <td>
                    <label for="namasuami">Nama Suami </label><br>
                    <input class="form" type="text" name="namasuami" id="namasuami" value="" disabled>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="namaisteri">Nama Isteri </label><br>
                    <input class="form" type="text" name="namaisteri" id="namaisteri" value="" disabled>
                  </td>
                  <td>
                    <label for="tarikhakad">Tarikh Akad Nikah * </label><br>
                    <input class="form" type="text" name="tarikhakad" id="tarikhakad" disabled> 
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="tempatakad">Tempat Akad Nikah * </label><br>
                    <input class="form" type="text" name="tempatakad" id="tempatakad" disabled>
                  </td>
                  <td>
                    <label for="masajam">Masa Akad  * </label><br>
                    <input class="masaform" type="text" name="masajam" id="masajam" disabled>
                    <input class="masaform" type="text" name="masaminit" id="masaminit" disabled>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="maskahwin">Jenis Hantaran * </label><br>
                      <input class="form" type="text" name="maskahwin" id="maskahwin" disabled>
                  </td>
                  <td>
                    <label for="jurunikah">Nama Jurunikah * </label><br>
                      <input class="form" type="text" name="jurunikah" id="jurunikah" disabled>
                  </td>
                </tr>
                
              <table class="marriageform">
                <tr>
                  <td>
                    <label for="namawali">Nama Wali * </label><br>
                    <input class="form" type="text" name="namawali" id="namawali" disabled>
                  </td>
                  <td>
                    <label for="waliic">No Kad Pengenalan Wali * </label><br>
                      <input class="form" type="text" name="waliic" id="waliid" disabled>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="alamatwali">Alamat Wali * </label><br>
                    <input class="form" type="text" name="alamatwali" id="alamatwali" disabled>
                  </td>
                  <td>
                    <label for="hubungan">Hubungan * </label><br>
                    <input class="form" type="text" name="hubungan" id="hubungan" disabled>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="dobwali">Tarikh Lahir Wali *</label><br>
                    <input class="form" type="text" name="dobwali" id="dobwali" disabled>
                  </td>
                  <td>
                    <label for="umurwali">Umur Wali *</label><br>
                    <input class="form" type="text" name="umurwali" id="umurwali"  disabled>
                  </td>
                </tr>
              </table>
              <table class="marriageform">
                <tr>
                  <td>
                    <label for="namasaksi1">Nama Saksi 1 *</label><br>
                    <input class="form" type="text" name="namasaksi1" id="namasaksi1" disabled>
                  </td>
                  <td>
                    <label for="saksi1id">Kad Pengenalan Saksi 1 *</label><br>
                    <input class="form" type="text" name="saksi1id" id="saksi1id" disabled>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="alamatsaksi1">Alamat Saksi 1 *</label><br>
                    <textarea class="form" name="alamatsaksi1" id="alamatsaksi1" disabled></textarea>
                  </td>
                  <td>
                    <label for="umursaksi1">Umur Saksi 1 *</label><br>
                    <input class="form" type="text" name="umursaksi1" id="umursaksi1" disabled>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="namasaksi2">Nama Saksi 2 *</label><br>
                    <input class="form" type="text" name="namasaksi2" id="namasaksi2" disabled>
                  </td>
                  <td>
                    <label for="saksi2id">Kad Pengenalan Saksi 2 *</label><br>
                    <input class="form" type="text" name="saksi2id" id="saksi2id" disabled>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="alamatsaksi2">Alamat Saksi 2 *</label><br>
                    <textarea class="form" name="alamatsaksi2" id="alamatsaksi2" disabled></textarea>
                  </td>
                  <td>
                    <label for="umursaksi2">Umur Saksi 2 *</label><br>
                    <input class="form" type="text" name="umursaksi2" id="umursaksi2" disabled>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="taliq">Lafaz Ta'liq</label><br>
                    <input class="form" type="text" name="taliq" id="taliq" disabled>
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
