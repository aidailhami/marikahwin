<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Edit Staff Profile | E-Munakahat </title>
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
    <img src="../../../asset/User_headerMunakahat.png" class="bannerimg">
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
        <form class="StaffProfileView" method="POST" action="../../BusinessServices/Controller/ManageStafFProfileAdminController/EditStaffProfileController.php">
        <label for="StaffIC"> <a class="star">*</a> No. Kad Pengenalan</label><a>: &nbsp;</a>
                    <input type="text" id="StaffIC" name="StaffIC" required><i class='fas fa-pencil-alt' style='font-size:24px;color:grey'></i>
                 <br>
                 <label><a class="star">*</a> Nama Pengguna</label><a>: &nbsp;</a>
                    <input type="text" id="StaffName" name="StaffName" required><i class='fas fa-pencil-alt' style='font-size:24px;color:grey'></i>
                    <br>
                <label> <a class="star">*</a> Peringkat Akses</label><a>: &nbsp;</a>   
                 <select id="StaffCategoryAccess" name="StaffCategoryAccess">
                 <option value="" selected disabled>Select Category Access</option>
                 <option value="Pegawai Kaunter" > Pegawai Kaunter</option>
                 <option value="Pegawai Pelulus">Pegawai Pelulus</option>
                 <option value="Pegawai Undang-Undang Keluarga Islam" >Pegawai Undang-Undang Keluarga Islam (UKI)</option>
                 <option value="Pentadbir Sistem JAIP">Pentadbir Sistem JAIP</option>
                </select><br>
                    <label><a class="star">*</a> Kata Laluan </label><a>: &nbsp;</a>
                    <input type="password" class id="StaffPassword" name="StaffPassword" required>  <input class="submitbtn" type="submit" value="RESET">
            <div class="submitarea">
                <input class="submitbtn" type="submit" value="SIMPAN">
            </div>
        </form>
</div>
</div>
</body>
</html>