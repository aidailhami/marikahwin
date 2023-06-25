<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INCENTIVE-SEMAKPAGE</title>
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
          <li><a class="selected" href="">Semak Permohonan</a></li>
        </ul>
        <li><a href="/profile">Keluar</a></li>
    </ul>
</div>

 <!-- Top Navigation Bar-->
 <div class="top-navigation">
  <a class="navtitle left-side">Permohonan Insentif</a>
  <a class="navtitle">>> Semak Permohonan</a>
  <div class="right-side">
      <a class="icon"><img src="../../../asset/image/bell.png"></a>
      <a class="icon"><img src="../../../asset/image/profile.png"></a>
  </div>
</div>

<div class="content">
  <br>
  <br>
  <br>
  <!-- Search Form -->
  <form action="" method="POST" class="search-form">
    <input type="text" id="userIC" name="userIC" class="search-input" placeholder="MASUKKAN NO KP" required>
    <input type="submit" name="searchstatus" value="SEMAK" class="search-button">
  </form>

<?php

  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection, 'marikahwin');

  if(isset($_POST['searchstatus']))
  {
    $USERIC = $_POST['userIC'];


    $query = "SELECT * FROM incentive_data where Incentive_UserIC='$USERIC' ";
  
    $query_run = mysqli_query($connection,$query);

      while($row = mysqli_fetch_array($query_run))
      {
        ?> 
          <form action= "" method="POST"><br><br>
          <table class="listtable">
            <tr> <!--Header-->
                <th>No</th>
                <th>Nama Pemohon</th>
                <th>KP Pemohon</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>1</td>
                <td><input type="text" name="Incentive_User_Name" value="<?php echo $row['Incentive_User_Name'] ?>"/> </td>
                <td><input type="text" name="Incentive_UserIC" value="<?php echo $row['Incentive_UserIC'] ?>"/> </td>
                <td><input type="text" name="Incentive_Status" value="<?php echo $row['Incentive_Status'] ?>"/></td>
            </tr>
          </table>
          </form>
          <?php  
  
      }
  
  }
?>
  <br>
  <br>
  <br>
  <form>
    <input type="button" onclick="location.href='IncentiveApplicationMenu.php';" value="KEMBALI" class="back-button">
    </div>
  </form>
 
</div>
  

  
</body>
</html>