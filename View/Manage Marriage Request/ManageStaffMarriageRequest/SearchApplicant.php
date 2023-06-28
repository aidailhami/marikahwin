<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>search for organizer</title>
    <style>
    .sidebar{
    position: absolute;
    bottom: 200px;
    left: 12px;
    width: 20%;
    }
   ul{
    list-style-type:none;
   }

  a{
    margin: 0;
    padding: 0;
   }

   a:hover{
    background-color: white;
    color: black;
    border-radius: 8px;
   }

   .navbar li a{
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration:none;
    }
   .user{
    text-align: center;
   }
    body{
            background-color: rgb(114,191,247);;
        }
    .navbar{
            list-style-type: none;
        }
    .user{
            list-style-type: none;
        }
     .next{

            background-color: white;
        }

    .container{
        
         background-color: white;
         border-top-left-radius: 20px;
         border-top-right-radius: 20px;
         height: 650px;
         }
    .page{
    background-color: #99f0e3;
    top: 0px;
    right: 5px;
    width: 100%;
    height: 30px;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    padding-top: 10px;
    } 
    Table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.containers td{
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

div {
        margin-bottom: 10px;
      }
      label {
        display: inline-block;
        width: 150px;
        text-align: left;
      }
      .containing .submitbutton button {
    background-color: turquoise;
    border: 2px solid turquoise;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  .containing .submitbutton .kembalibutton button {
    background-color: white;
    border: 2px solid turquoise;
    color: turquoise;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  
 

.form {
  width: 400px;
}
input[type=text], input[type=password], input[type=date] {
  width: 20%;
  padding: 15px;
  margin: 5px 10px 22px 280px;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=date]:focus{
  background-color: #ddd;
  outline: black;
}
table.GeneratedTable {
  width: 85%;
  background-color: #ffffff;
  border-collapse: collapse;
  border-width: 2px;
  border-color: turquoise;
  border-style: solid;
  color: #000000;
}

table.GeneratedTable td, table.GeneratedTable th {
  border-width: 2px;
  border-color: turquoise;
  border-style: solid;
  padding: 3px;
}

table.GeneratedTable thead {
  background-color: turquoise;
}

    </style>

    <div class="logo"><img src="/sdwproject/assets/AdminStaff_headerMunakahat.png" style= "width:100%; height: 10%"  ></div>
    </head>

<body>
<div class=sidebar>
    <ul class=user>
        <li>ID:</li>
        <li>Nama:</li>
    </ul>

    <ul class="navbar">
        <li><a href="/">Profil</a></li>
        <li><a href="contact">Daftar Kursus Perkahwinan</a></li>
        <li><a href="contact">Permohonan Berkahwin</a></li>
        <li><a href="/posts/first-post">Daftar Perkahwinan</a></li>
        <li><a href="UserMainConsultationPage.php">Aduan/Khidmat Nasihat</a></li>
        <li><a href="/profile">Insentif</a></li>
        <li><a href="/profile">Keluar</a></li>
    </ul>
</div>
 
<div style="margin-left:25%">
   <div class="container">
        <div class=page>
                &ensp;Maklumat
        </div>
            
        <div class="containers">
   <div class="search">
    <input type="text" placeholder="Cari" name="placename" id="placename" required>
    <button type="button" onclick="">Cari</button>
  </div>
  
  <table class="GeneratedTable"style="margin: 0 auto;">
  <thead>
  <thead>
    <tr >
      <th>NO.</th>
      <th>No Kad Pengenalan Pemohon</th>
      <th>No Kad Pengenalan Pasangan</th>
      <th>No Pendaftaran</th>
      <th>Nombor telefon</th>
      <th>Operasi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td> </td><!--no-->
      <td> </td><!--tempat-->
      <td> </td><!--alamat-->
      <td> </td><!--daerah-->
      <td> </td><!--no phone-->
      <td><button type="button" onclick="window.location.href = 'UpdateCourseInformation.php';">Buang</button> 
      <button type="button" onclick="window.location.href = 'ViewApplicantInformation.php';">Lihat</button></td><!--operasi-->
    </tr>
    <tr>
      <td> </td><!--no-->
      <td> </td><!--tempat-->
      <td> </td><!--alamat-->
      <td> </td><!--daerah-->
      <td> </td><!--no phone-->
      <td> </td><!--operasi-->
      
    </tr>
    <tr>
      <td> </td><!--no-->
      <td> </td><!--tempat-->
      <td> </td><!--alamat-->
      <td> </td><!--daerah-->
      <td> </td><!--no phone-->
      <td> </td><!--operasi-->
    </tr>
    <tr>
      <td> </td><!--no-->
      <td> </td><!--tempat-->
      <td> </td><!--alamat-->
      <td> </td><!--daerah-->
      <td> </td><!--no phone-->
      <td> </td><!--operasi-->
    </tr>
    <tr>
      <td> </td><!--no-->
      <td> </td><!--tempat-->
      <td> </td><!--alamat-->
      <td> </td><!--daerah-->
      <td> </td><!--no phone-->
      <td> </td><!--operasi-->
    </tr>
  </tbody>
</table>
</div>
    </div>
<br>
<br>
     </form>
     <div class="containing" style="text-align: right; margin-top: -120px;">
  <div class="submitbutton" style="display: flex; justify-content: space-between;">
  <div class="kembalibutton">
    <button type="button" onclick="window.location.href = 'marriagepreparationcourse.php';" style="margin-bottom: 10px;">Kembali</button>
</div>
    <button type="button" onclick="selesai()" style="margin-bottom: 10px;">Simpan</button>
  </div>
</div>
</div>
</body>

</html>
