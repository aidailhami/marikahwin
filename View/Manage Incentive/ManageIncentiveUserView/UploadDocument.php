<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INCENTIVE-MAKLUMATDOCUMENTUPLOAD</title>
  <link rel="stylesheet" href="../../../asset/css/pageStyle.css">
</head>

<body>
  <!--Banner-->
  <img src="../../../asset/image/User_headerMunakahat.png" class="bannerimg">

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

        <li class="selected"><a href="IncentiveApplicationMenu.php">Insentif</a></li>
        <ul class="navbar2">
          <li><a class="selected" href="IncentiveApplicationForm.php">Permohonan Baru</a></li>
          <li><a class="selected" href="">Muat Naik Document</a></li>
        </ul>
        <li><a href="/profile">Keluar</a></li>
    </ul>
</div>

 <!-- Top Navigation Bar-->
 <div class="top-navigation">
  <a class="navtitle left-side">Permohonan Insentif</a>
  <a class="navtitle">>> Permohonan Baru   >> Muat Naik Dokumen</a>
  <div class="right-side">
      <a class="icon"><img src="../../../asset/image/bell.png"></a>
      <a class="icon"><img src="../../../asset/image/profile.png"></a>
  </div>
</div>

<div class="content">
  <p class="info">PERMOHONAN HENDAKLAH DISERTAKAN DENGAN :<br>
    <br>
    2 Salinan Kad Pengenalan pemohon (depan dan belakang)<br>
    1 Salinan catatan akad nikah pemohon<br>
    2 Salinan penyata akaun bank pemohon<br>
    Salinan Kenyataan Residensi
  </p>

  <div class="container-document-upload">
    <a class="uploadpic"><img src="../../../asset/image/upload.png"></a>
    <form class="document-upload-form" action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="document" id="document" required>
      <br>
      <input type="submit" value="Muat Naik" class="submit-upload">
    </form>
  </div>
  <br>
  <br>
  <form>
    <input type="button" onclick="location.href='ViewIncentiveApplication.php';" value="SEMAK PERMOHONAN" class="tengah-button">
  </form>
  <br>
  <br>
  <form>
    <input type="button" onclick="location.href='IncentiveApplicationForm.php';" value="KEMBALI" class="kiri-button">
    <input type="button" onclick="location.href='';" value="HANTAR PERMOHONAN" class="kanan-button">
    </div>
  </form>
  
</div>
  

  
</body>
</html>