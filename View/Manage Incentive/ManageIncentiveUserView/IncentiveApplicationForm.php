<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INCENTIVE-PERMOHNANBARU</title>
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
          <li><a class="selected" href="">Permohonan Baru</a></li>
        </ul>
        <li><a href="/profile">Keluar</a></li>
    </ul>
</div>

 <!-- Top Navigation Bar-->
 <div class="top-navigation">
  <a class="navtitle left-side">Permohonan Insentif</a>
  <a class="navtitle">>> Permohonan Baru</a>
  <div class="right-side">
      <a class="icon"><img src="../../../asset/image/bell.png"></a>
      <a class="icon"><img src="../../../asset/image/profile.png"></a>
  </div>
</div>

 <!-- Content-->
<div class="content">
  <button class="mohonbaru-button">Sila Isi Butiran Di Bawah untuk PERMOHONAN BAHARU</button><br><br><br>
  <form action=" " method="POST">
      <input type="text" id="userIC" name="userIC" class="mohon-input" placeholder="NO KAD PENGENALAN PEMOHON" required><br><br><br>
      <input type="button" onclick="location.href='IncentiveApplicationMenu.php';" value="KEMBALI" class="kiri-button">
      <input type="submit" name="search" value="SEMAK" class="kanan-button">
  </form>
  
<?php

  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection, 'marikahwin');

  if(isset($_POST['search']))
  {
    $USERIC = $_POST['userIC'];


    $query = "SELECT * FROM user where UserIC='$USERIC' ";
  
  
    $query_run = mysqli_query($connection,$query);

      while($row = mysqli_fetch_array($query_run))
      {
        ?> 
          <form action="../../../BusinessServices/Controller/UserIncentiveController.php" method="POST"><br><br>
          <br><br><hr><br><br><button class="selected-form">BORANG PERMOHONAN</button><br><br>
          <table class="listtable">
            <tr> <!--Header-->
                <th>No</th>
                <th>PERKARA</th>
                <th>MAKLUMAT</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Nama Pemohon</td>
                <td><input type="text" name="User_Name" value="<?php echo $row['User_Name'] ?>"/> </td>
            </tr>
            <tr>
                <td>2</td>
                <td>No Kad Pengenalan</td>
                <td><input type="text" name="UserIC" value="<?php echo $row['UserIC'] ?>"/> </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Jantina</td>
                <td><input type="text" name="User_Gender" value="<?php echo $row['User_Gender'] ?>"/> </td>
            </tr>
            <tr>
                <td>4</td>
                <td>No. Tel</td>
                <td><input type="text" name="User_PhoneNumber" value="<?php echo $row['User_PhoneNumber'] ?>"/> </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Tarikh Lahir</td>
                <td><input type="text" name="User_DOB" value="<?php echo $row['User_DOB'] ?>"/> </td>
            </tr>
            <tr>
                <td>6</td>
                <td>E-mel</td>
                <td><input type="text" name="User_Email" value="<?php echo $row['User_Email'] ?>"/> </td>
            </tr>
            <tr>
                <td>7</td>
                <td>Umur</td>
                <td><input type="text" name="User_Age" value="<?php echo $row['User_Age'] ?>"/> </td>
            </tr>
            <tr>
                <td>8</td>
                <td>Alamat Terkini</td>
                <td><input type="text" name="User_CurrentAddress" value="<?php echo $row['User_CurrentAddress'] ?>"/> </td>
            </tr>
            <tr>
                <td>9</td>
                <td>Alamat Kad Pengenalan</td>
                <td><input type="text" name="User_ICAddress" value="<?php echo $row['User_ICAddress'] ?>"/> </td>
            </tr>
            <tr>
                <td>10</td>
                <td>Taraf Pendidikan</td>
                <td><input type="text" name="User_EducationLevel" value="<?php echo $row['User_EducationLevel'] ?>"/> </td>
            </tr>
            <tr>
                <td>11</td>
                <td>Pendapatan Bulanan</td>
                <td><input type="text" name="User_Salary" value="<?php echo $row['User_Salary'] ?>"/> </td>
            </tr>
            <tr>
                <td>12</td>
                <td>Sektor Pekerjaan</td>
                <td><input type="text" name="User_JobSector" value="<?php echo $row['User_JobSector'] ?>"/> </td>
            </tr>
            <tr>
                <td>13</td>
                <td>Pangkat</td>
                <td><input type="text" name="User_Position" value="<?php echo $row['User_Position'] ?>"/> </td>
            </tr>
            <tr>
                <td>14</td>
                <td>Status Agama</td>
                <td><input type="text" name="User_ReligionStatus" value="<?php echo $row['User_ReligionStatus'] ?>"/> </td>
            </tr>
            <tr>
                <td>15</td>
                <td>Bangsa</td>
                <td><input type="text" name="User_Citizenship" value="<?php echo $row['User_Citizenship'] ?>"/> </td>
            </tr>
            <tr>
                <td>16</td>
                <td>Warganegara</td>
                <td><input type="text" name="User_Nationality" value="<?php echo $row['User_Nationality'] ?>"/> </td>
            </tr>
            <tr>
                <td>17</td>
                <td>Nama Pasangan</td>
                <td><input type="text" name="Spouse_Name"></td>
            </tr>
            <tr>
                <td>18</td>
                <td>Umur Pasangan</td>
                <td><input type="text" name="Spouse_Age"></td>
            </tr>
            <tr>
                <td>19</td>
                <td>Kad Pengenalan Pasangan</td>
                <td><input type="text" name="SpouseIC"></td>
            </tr>
            <tr>
                <td>20</td>
                <td>Pendapatan Bulanan Pasangan</td>
                <td><input type="text" name="Spouse_Salary"></td>
            </tr>
            <tr>
                <td>21</td>
                <td>Sektor Pekerjaan Pasangan</td>
                <td><input type="text" name="Spouse_JobSector"></td>
            </tr>
            <tr>
                <td>22</td>
                <td>Pangkat Pasangan</td>
                <td><input type="text" name="Spouse_Position"></td>
            </tr>
          </table>

          <br><br><input type="submit" name="simpan" value="HANTAR" class="tengah-button"><br><br><br>
          <input type="button" onclick="location.href='IncentiveApplicationMenu.php';" value="KEMBALI" class="kiri-button">
          <input type="button" onclick="location.href='UploadDocument.php';" value="SETERUSNYA" class="kanan-button">
          </form>

          <?php  
  
      }
  
  }
?>
<br>
<br>
  

</div>
    
</body>
</html>