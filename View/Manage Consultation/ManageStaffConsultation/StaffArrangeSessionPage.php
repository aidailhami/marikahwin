<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <title>Khidmat Nasihat | e-Munakahat</title>
        <link rel="icon" type="image/x-icon" href="img/jata_phg.png">

        <link rel="stylesheet" href="css/appStaff.css">
        <div class="logo"><img src="img/AdminStaff_headerMunakahat.png" style= "width:100%; height: 10%"  ></div>

    </head>

    <body>
        <script src="js/appStaff.js"></script>
        
        <?php 
            include 'navbar/navbarStaff.php';
        ?>

        <div class="container">
            <div class=page>
                &ensp;<a href="StaffMainConsultationPage.php" class=pagelink>Aduan / Khidmat Nasihat</a> >> Atur Sesi Khidmat Nasihat
            </div>
            <div class=box style="margin-top:40px; padding:10px">
                <table style="margin-top:20px;border:1px solid black;text-align:left;width:100%;height:100%;padding:10px;">
                    <caption style="border:1px solid black;text-align: center;background-color: #bbe1fe;padding:5px;">ATUR SESI KHIDMAT NASIHAT</caption>
                    <tr>
                        <td>Nama / KP Pengadu</td>
                        <td> : </td>
                        <td>  </td>
                    </tr>
                    <tr>
                        <td>Nama / KP Kena Adu</td>
                        <td> : </td>
                        <td>  </td>
                    </tr>
                    <tr>
                        <td>No. Akuan Terima</td>
                        <td> : </td>
                        <td>  </td>
                    </tr>
                    <tr>
                        <td>Pegawai Khidmat Nasihat<span class="bold red">*</span></td>
                        <td> : </td>
                        <td>
                            <select name="approval" class=form_input2 required style="margin-top:15px;">
                                <option selected>Sila Pilih</option>
                                <option value="1">LULUS</option>
                                <option value="2">GAGAL</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tarikh Sesi<span class="bold red">*</span></td>
                        <td> : </td>
                        <td><input type="date" name="sessionDate" class=form_input2 required style="margin-top:15px;"></td>
                    </tr>
                    <tr>
                        <td>Masa Sesi<span class="bold red">*</span></td>
                        <td> : </td>
                        <td><input type="time" name="sessionTime" class=form_input2 required style="margin-top:15px;"></td>
                    </tr>
                    <tr>
                        <td>Tempat Sesi<span class="bold red">*</span></td>
                        <td> : </td>
                        <td>
                            <select name="approval" class=form_input2 required style="margin-top:15px;">
                                <option selected>Sila Pilih</option>
                                <option value="1">LULUS</option>
                                <option value="2">GAGAL</option>
                            </select>  
                        </td>
                    </tr>
                </table>
                <div style="margin-left:680px;margin-top:20px;text-decoration:none;">
                    <a href="StaffMainConsultationPage.php">
                        <input type="button" class=button value="Kembali" onclick=check()>
                    </a>
                    <a href="StaffMainConsultationPage.php">
                        <input type="button" class=button value="Simpan" onclick=check()>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>