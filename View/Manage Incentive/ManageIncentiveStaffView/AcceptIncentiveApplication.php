<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PENGURUSAN-INCENTIVE-TERIMA</title>
  <link rel="stylesheet" href="../../../asset/css/pageStyleAdmin.css">
</head>

<body>
  <!--Banner-->
  <img src="../../../asset/image/AdminStaff_headerMunakahat.png" class="bannerimg">

  <!-- Side Navigation Bar-->
  <div class="sidebar">
    <ul class="user">
        <li>ID:</li>
        <li>Nama:</li>
    </ul>
    <ul class="navbar">
        <li><a href="/">Profil</a></li>
        <li><a href="contact">Kebenaran Berkahwin</a></li>
        <li><a href="contact">Pendaftaran Ruju</a></li>
        <li><a href="contact">Pendaftaran Nikah</a></li>
        <li><a href="contact">Khidmad Nasihat</a></li>
        <li><a href="contact">Salinan Dokumen</a></li>
        <li><a href="contact">Pembetulan Dokumen</a></li>
        <li><a href="contact" >Utiliti</a></li>    
        <li><a href="contact">Laporan</a></li>  

        <li class="selected"><a href="/profile">Pengurusan Insentif</a></li>
        <ul class="navbar2">
          <li><a class="selected" href="">Terima Permohonan</a></li>
        </ul>
        <li><a href="/profile">Keluar</a></li>
    </ul>
</div>

 <!-- Top Navigation Bar-->
 <div class="top-navigation">
  <a class="navtitle left-side">Pengurusan Insentif</a>
  <a class="navtitle">>> Terima Permohonan</a>
  <div class="right-side">
      <a class="icon"><img src="../../../asset/image/bell.png"></a>
      <a class="icon"><img src="../../../asset/image/profile.png"></a>
  </div>
</div>

<div class="content"><br><br>
  <button class="selected-form">MAKLUMAT PEMOHON</button><br>

  <form action= "" method="POST"><br><br>
    <table class="listtable">
      <tr> <!--Header-->
          <th>No</th>
          <th>Nama Pemohon</th>
          <th>KP Pemohon</th>
          <th>Tindakan</th>
      </tr>
      <tr>
          <td>1</td>
          <td></td>
          <td></td>
          <td class="button-cell">
            <button class="accept">TERIMA</button>
          </td>
      </tr>
    </table>
    </form><br><br>
    <input type="button" onclick="location.href='IncentiveManageMenu.php';" value="KEMBALI" class="kiri-button">

  
  
</div>
  

  
</body>
</html>