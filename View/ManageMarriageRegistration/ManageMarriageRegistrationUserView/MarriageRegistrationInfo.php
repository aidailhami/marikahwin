<?php

    class MarriageRegistrationInfo{
      public function render(){
        include_once('dbconnect.php');
        require_once('BusinessServices\Controller\UserMarriageRegistrationController.php');
        $this->now = new UserMarriageRegistrationController();
        $this->now->getInfo();
        $this->now->submitInfo();
        

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
            <li class="selected"><a>Pendaftaran Perkahwinan</a></li>
                <ul class="navbar2">
                    <li><a class="selected" href="index.php?action=viewList">Daftar Kahwin</a></li>
                    <li><a href="">Kad Kahwin</a></li>
                </ul>
            <li><a href="">Aduan/Khidmat Nasihat</a></li>
                
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

        <div> 
            <table class="marriageformnav">
                <tr>
                    <td>Maklumat Suami</td>
                    <td>Maklumat Isteri</td>
                    <td class="active">Maklumat Perkahwinan</td>
                </tr>
            </table>
        </div>

        <!--Husband Details content-->
        <form method="post">
            <div>
              <div class="section">
              <a>Butiran Perkahwinan</a>
              </div>
              <table class="marriageform">
                <tr>
                  <td>
                    <label for="tarikhmohon">Tarikh Mohon </label><br>
                    <input class="form" type="text" name="tarikhmohon" id="tarikhmohon" value="<?php echo date('d-m-Y')?>">
                  </td>
                  <td>
                    <label for="namasuami">Nama Suami </label><br>
                    <input class="form" type="text" name="namasuami" id="namasuami" value="<?php echo $this->now->getName('LELAKI')?>">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="namaisteri">Nama Isteri </label><br>
                    <input class="form" type="text" name="namaisteri" id="namaisteri" value="<?php echo $this->now->getName('PEREMPUAN')?>">
                  </td>
                  <td>
                    <label for="tarikhakad">Tarikh Akad Nikah * </label><br>
                    <input class="form" type="date" name="tarikhakad" id="tarikhakad"> 
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="tempatakad">Tempat Akad Nikah * </label><br>
                    <input class="form" type="text" name="tempatakad" id="tempatakad">
                  </td>
                  <td>
                    <label for="masajam">Masa Akad  * </label><br>
                    <input class="masaform" type="text" name="masajam" id="masajam">
                    <input class="masaform" type="text" name="masaminit" id="masaminit">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="maskahwin">Jenis Hantaran * </label><br>
                      <input class="form" type="text" name="maskahwin" id="maskahwin">
                  </td>
                  <td>
                    <label for="jurunikah">Nama Jurunikah * </label><br>
                      <input class="form" type="text" name="jurunikah" id="jurunikah">
                  </td>
                </tr>
                
              </table>
              <div class="section">
              <a>Butiran Wali</a>
              </div>
              <table class="marriageform">
                <tr>
                  <td>
                    <label for="namawali">Nama Wali * </label><br>
                    <input class="form" type="text" name="namawali" id="namawali"></input>
                  </td>
                  <td>
                    <label for="waliic">No Kad Pengenalan Wali * </label><br>
                      <input class="form" type="text" name="waliic" id="waliid">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="alamatwali">Alamat Wali * </label><br>
                    <input class="form" type="text" name="alamatwali" id="alamatwali">
                  </td>
                  <td>
                    <label for="hubungan">Hubungan * </label><br>
                      <select class="form" type="text" name="hubungan" id="hubungan">
                        <option value="BAPA">BAPA</option>
                        <option value="DATUK">DATUK</option>
                        <option value="SEPUPU LELAKI">SEPUPU LELAKI</option>
                        <option value="ADIK-BERADIK LELAKI">ADIK BERADIK LELAKI</option>
                      </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="dobwali">Tarikh Lahir Wali *</label><br>
                    <input class="form" type="date" name="dobwali" id="dobwali">
                  </td>
                  <td>
                    <label for="umurwali">Umur Wali *</label><br>
                    <input class="form" type="text" name="umurwali" id="umurwali">
                  </td>
                </tr>
              </table>
              <div class="section">
              <a>Maklumat Saksi</a>
              </div>
              <table class="marriageform">
                <tr>
                  <td>
                    <label for="namasaksi1">Nama Saksi 1 *</label><br>
                    <input class="form" type="text" name="namasaksi1" id="namasaksi1">
                  </td>
                  <td>
                    <label for="saksi1id">Kad Pengenalan Saksi 1 *</label><br>
                    <input class="form" type="text" name="saksi1id" id="saksi1id">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="alamatsaksi1">Alamat Saksi 1 *</label><br>
                    <textarea class="form" name="alamatsaksi1" id="alamatsaksi1"></textarea>
                  </td>
                  <td>
                    <label for="umursaksi1">Umur Saksi 1 *</label><br>
                    <input class="form" type="text" name="umursaksi1" id="umursaksi1">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="namasaksi2">Nama Saksi 2 *</label><br>
                    <input class="form" type="text" name="namasaksi2" id="namasaksi2">
                  </td>
                  <td>
                    <label for="saksi2id">Kad Pengenalan Saksi 2 *</label><br>
                    <input class="form" type="text" name="saksi2id" id="saksi2id">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="alamatsaksi2">Alamat Saksi 2 *</label><br>
                    <textarea class="form" name="alamatsaksi2" id="alamatsaksi2"></textarea>
                  </td>
                  <td>
                    <label for="umursaksi2">Umur Saksi 2 *</label><br>
                    <input class="form" type="text" name="umursaksi2" id="umursaksi2">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="taliq">Lafaz Ta'liq</label><br>
                    <select class="form" name="taliq" id="taliq">
                      <option value="YA">YA</option>
                      <option value="TIDAK">TIDAK</option>
                    </select>
                  </td>
                </tr>
              </table>
            </div>
            <div class="submitarea">
                <input class="submitbtn right-side" type="submit" name="submit3" value="Seterusnya">
            </div>
        </form>
    </div>
</body>
</html>

<?php 
      }
    }
?>
