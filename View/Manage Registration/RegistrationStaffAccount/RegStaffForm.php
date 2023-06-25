<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Staff Profile</title>
    <style>
.sidebar{
    position: absolute;
    bottom: 60px;
    left: 0px;
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
    border-radius: 8px;
}

a:visited{
    background-color:white;
    border-radius: 8px;
}

.navbar li a{
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration:none;
}

.staff{
    text-align: center;
}

body{
    background-color: rgb(114, 191, 247);
    padding: 0;
    margin: 0;
}

.container {
    background-color: rgb(241, 241, 241);
    position: absolute;
    bottom: 0px;
    top:120px;
    right: 20px;
    height: 85%;
    width: 70%;
    padding: 20px;
    border-radius: 20px;
}

.container2 {
    background-color: rgb(241, 241, 241);
    right: 0px;
    height: 25%;
    width: 95%;
    padding: 20px;
    border-radius: 20px;
}

select,option{
    border:1px solid;
    text-align: center;
    margin: 6px;
    width: 220px;
    padding: 6px 10px;
    border-radius: 5px;
    border-color:grey;
}

.bannerimg {
    width:100%;
}


.icon img{
    vertical-align: middle;
    margin-right: 20px;
    max-width: 30px;
    max-height: 30px;
}


.form {
    width: 520px;
} 

.form.option {
    width: 520px;
} 


.star{
    color:red;

}

.page{
    background-color: #bbe1fe;
    position: absolute;
    top: 0px;
    right: 0px;
    width: 100%;
    height: 30px;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    padding-top: 10px;
}


label{
    
    display: inline-block;
    width: 350px;
    margin-left: 150px;
    text-align: left;
    font-weight: bold;
    padding: 10px 10px;
    padding-top: 20px;
    
}

input[type=text]{
    border:1px solid;
    text-align: center;
    margin: 6px;
    width: 200px;
    padding: 6px 10px;
    border-radius: 5px;
    border-color:grey;

}

input[type=password]{
    border:1px solid;
    text-align: center;
    margin: 6px;
    width: 200px;
    padding: 6px 10px;
    border-radius: 5px;
    border-color:grey;

}
                
input[type=email]{
    border:1px solid;
    text-align: center;
    margin: 6px;
    width: 200px;
    padding: 6px 10px;
    border-radius: 5px;
    border-color:grey;

}

.submitarea {
    text-align: center;
    margin:10px;
    padding-top: 30px;
   
} 

.submitbtn {
    background-color: rgb(110, 212, 255);
    padding: 8px 16px;
    text-align: center;
    border: none;
    color:black;
    font-weight: bold;
    border-radius: 45px;
    margin-top:0px;

}


        </style>

</head>

<body>
    <!-- Banner-->
    <img src="../asset/User_headerMunakahat.png" class="bannerimg">
    <!-- Side Navigation Bar-->
    <div class="sidebar">
        <ul class="staff">
        <li>ID: </li>
        <li>Nama:</li>
        <li>Akses:</li>
        <li>Jabatan:</li>
        </ul>
        <ul class="navbar">
           
            <li><a href="contact">Daftar Kursus Perkahwinan</a></li>
            <li><a href="contact">Permohonan Perkahwinan</a></li>
            <li><a href="MarriageRegistration.php" >Pendaftaran Perkahwinan</a></li>
            <li><a href="UserMainConsultationPage.php">Aduan/Khidmat Nasihat</a></li>
            <li  class="selected"><a href="">Utiliti</a></li>
            <li><a href="/profile">Pengurusan Insentif</a></li>
            <li><a href="/profile">Keluar</a></li>
        </ul>
    </div>

    <!--Main Content-->
    <div class="container">
        <!--Staff Profile content-->
            <div class="page">
            <a> &nbsp; &nbsp; Utiliti</a><a> >>Pengguna Sistem</a>
            </div>
            <div class="box" style="margin-top:40px; padding:10px">
        <form class="StaffProfileView" method="POST" action="../../BusinessServices/Controller/RegistrationAccountAdminController/RegStaffController.php">
        <label for="StaffIC"> <a class="star">*</a> No. Kad Pengenalan</label><a>: &nbsp;</a>
                    <input type="text" id="StaffIC" name="StaffIC" required>
                 <br>
                <label> <a class="star">*</a> Kategori Akses</label><a>: &nbsp;</a>   
                 <select id="StaffCategoryAccess" name="StaffCategoryAccess">
                 <option value="" selected disabled>Select Category Access</option>
                 <option value="Pegawai Kaunter" > Pegawai Kaunter</option>
                 <option value="Pegawai Pelulus">Pegawai Pelulus</option>
                 <option value="Pegawai Undang-Undang Keluarga Islam" >Pegawai Undang-Undang Keluarga Islam (UKI)</option>
                 <option value="Pentadbir Sistem JAIP">Pentadbir Sistem JAIP</option>
                </select><br>
                <label><a class="star">*</a> Nama Pengguna</label><a>: &nbsp;</a>
                    <input type="text" id="StaffName" name="StaffName" required>
                  <br>
                 <label><a class="star">*</a> Jawatan Pengguna </label><a>: &nbsp;</a>
                    <input type="text" class id="StaffPosition" name="StaffPosition" required>
                  <br>
                  <label><a class="star">*</a> Emel </label><a>: &nbsp;</a>
                    <input type="email" class id="StaffEmail" name="StaffEmail" required>
                    <br>
                     <label><a class="star">*</a> PAID </label><a>: &nbsp;</a>
                    <select id="StaffPAID" name="StaffPAID">
                    <option value="" selected disabled>Select PAID</option>
                 <option value="PEJABAT AGAMA ISLAM DAERAH KUANTAN" >PEJABAT AGAMA ISLAM DAERAH KUANTAN</option>
                 <option value="PEJABAT AGAMA ISLAM DAERAH BENTONG">PEJABAT AGAMA ISLAM DAERAH BENTONG</option>
                 <option value="PEJABAT AGAMA ISLAM DAERAH CAMERON HIGHLAND" >PEJABAT AGAMA ISLAM DAERAH CAMERON HIGHLAND</option>
                 <option value="PEJABAT AGAMA ISLAM DAERAH JERANTUT" >PEJABAT AGAMA ISLAM DAERAH JERANTUT</option>
                 <option value="PEJABAT AGAMA ISLAM DAERAH LIPIS">PEJABAT AGAMA ISLAM DAERAH LIPIS</option>
                 <option value="PEJABAT AGAMA ISLAM DAERAH PEKAN" >PEJABAT AGAMA ISLAM DAERAH PEKAN</option>
                 <option value="PEJABAT AGAMA ISLAM DAERAH RAUB" >PEJABAT AGAMA ISLAM DAERAH RAUB</option>
                 <option value="PEJABAT AGAMA ISLAM DAERAH TEMERLOH">PEJABAT AGAMA ISLAM DAERAH TEMERLOH</option>
                 <option value="PEJABAT AGAMA ISLAM DAERAH ROMPIN">PEJABAT AGAMA ISLAM DAERAH ROMPIN</option>
                 <option value="PEJABAT AGAMA ISLAM DAERAH MUADZAM SHAH" >PEJABAT AGAMA ISLAM DAERAH MUADZAM SHAH</option>
                 <option value="PEJABAT AGAMA ISLAM DAERAH MARAN" >PEJABAT AGAMA ISLAM DAERAH MARAN</option>
                 <option value="PEJABAT AGAMA ISLAM DAERAH CHENOR">PEJABAT AGAMA ISLAM DAERAH CHENOR</option>
                 <option value="PEJABAT AGAMA ISLAM DAERAH JENGKA" >PEJABAT AGAMA ISLAM DAERAH JENGKA</option>
                 <option value="PEJABAT AGAMA ISLAM DAERAH BERA" >PEJABAT AGAMA ISLAM DAERAH BERA</option>
                 <option value="JABATAN AGAMA ISLAM PAHANG">JABATAN AGAMA ISLAM PAHANG</option>
                </select>
                    <br>
                 <label><a class="star">*</a> Status Pengguna </label><a>: &nbsp;</a>
                    <select id="StaffStatus" name="StaffStatus">
                    <option value="" selected disabled>Select Status Pengguna</option>
                 <option value="Active" >Active</option>
                 <option value="Retriction">Retriction</option>
                    </select>
                    <label><a class="star">*</a> Kata Laluan</label><a>: &nbsp;</a>
                    <input type="password" class id="StaffPassword" name="StaffPassword" required>
            <div class="submitarea">
                <input class="submitbtn" type="submit" value="DAFTAR PENGGUNA">
            </div>
        </form>
</div>
   <div class="container2">
        <table>
           <tr>
            <th>Bil</th><th>No K/P</th><th>Nama Pengguna</th><th>Peringkat Access</th><th>Operasi</th>
         </tr>
         <tr>
                <td><a>&nbsp;</a></td><td><input type="text" name="StaffIC" id="InputStaffIC"></td>
                <td><input type="text" name="InputStaffName" id="StaffName"></td>
                <td><select id="StaffCategoryAccess" name="StaffCategoryAccess">
                <option value="" selected disabled>Select Category Access</option>
                                <option value="PegawaiKaunter" > Pegawai Kaunter</option>
                                <option value="PegawaiPelulus">Pegawai Pelulus</option>
                                <option value="PegawaiUKI" >Pegawai Undang-Undang Keluarga Islam (UKI)</option>
                                <option value="Pentadbir Sistem JAIP">Pentadbir Sistem JAIP</option>
                                </select><br>

                </td>

                <td><input type="Submit" value="Cari..."></td>
                </tr>
                <tr>
                <td>1.</td><td>  </td> <td>   </td> <td>   </td> <td> <a href="../../App/ManageStaffProfileAdminView/EditStaffProfile.php"> <i class='far fa-edit' style='font-size:24px'></i></a>  <a href="../../App/ManageStaffProfileAdminView/DeleteStaffProfile.php"><i class='fas fa-eraser' style='font-size:24px; color:red'></i></a> &nbsp;<a href="../../App/ManageStaffProfileAdminView/OpenPasswordRestriction.php"><i class='fas fa-user-plus' style='font-size:24px'></i></a> </td>
                </tr>
                </table>

</div>
</div>
</body>
</html>
