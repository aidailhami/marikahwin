<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <title>Khidmat Nasihat | e-Munakahat</title>
        <link rel="icon" type="image/x-icon" href="img/jata_phg.png">

        <link rel="stylesheet" href="css/appUser.css">
        <div class="logo"><img src="img/User_headerMunakahat.png" style= "width:100%; height: 10%"  ></div>

    </head>

    <body>
        <script src="js/appUser.js"></script>
        
        <?php 
            include 'navbar/navbarUser.php';
        ?>

        <div class="container">
            <div class=page>
                &ensp;<a href="UserMainConsultationPage.php" class=pagelink>Aduan / Khidmat Nasihat</a> >> Sesi Khidmat Nasihat
            </div>
            <div class=box style="margin-top:40px; padding:10px">
                <div id=fail style="display:none;">
                    <h3 style="color:red;">MAAF, PERMOHONAN ANDA GAGAL.</h3>
                    <a href="UserMainConsultationPage.php">
                        <input type="button" class=button value="Kembali">
                    </a>
                    <a href="UserApplyConsultationForm.php">
                        <input type="button" class=button value="Daftar Baru">
                    </a>
                </div>
                <div id=pass>
                    <h3 style="color:green;">TAHNIAH, PERMOHONAN ANDA LULUS!</h3>
                    <h4>Maklumat Sesi</h4>
                    <table style="border:0px;width:auto;text-align:left;">
                        <tr>
                            <td>Tarikh</td>
                            <td> : </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Masa</td>
                            <td> : </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tempat</td>
                            <td> : </td>
                            <td></td>
                        </tr>
                    </table><br>
                    <h4>Maklumat Pegawai Khidmat Nasihat</h4>
                    <table style="border:0px;width:auto;text-align:left;">
                        <tr>
                            <td>Nama Pegawai</td>
                            <td> : </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>No. Telefon</td>
                            <td> : </td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>  
        </div>
    </body>
</html>