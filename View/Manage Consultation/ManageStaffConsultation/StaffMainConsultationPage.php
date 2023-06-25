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
                &ensp;Aduan / Khidmat Nasihat
            </div>
            <form class=consult_form1>
                <table style="border:0px;text-align:left;">
                    <tr>
                        <td>No. K/P / Passport Pengadu</td>
                        <td><input type="text" name="ic" class=form_input1></td>
                        <td>No. K/P / Passport Kena Adu</td>
                        <td><input type="text" name="ic" class=form_input1></td>
                    </tr> 
                    <tr>
                        <td>No. Akuan Terima</td>
                        <td><input type="text" name="ic" class=form_input1></td>
                        <td>Status</td>
                        <td>
                        <select name="purpose" class=form_input1 required>
                            <option selected>Sila Pilih</option>
                            <option value="1">BARU</option>
                            <option value="2">LULUS</option>
                            <option value="3">LENGKAP</option>
                        </select>
                        </td>
                    </tr>               
                </table>
                <br>
                <div style="text-align:center">
                    <input type="button" class=button value="Cari" onclick=check()>
                    <a href="StaffApplyConsultationForm.php">
                        <input type="button" class=button value="Daftar Baru" onclick=register()>
                    </a>
                </div>
            </form>
            <br>
            <table style="margin-top:200px; border:1px solid #a7e5ec;background-color: white;">
            <tr style="background-color: #bbe1fe;padding: 20px;">
                <td>Bil.</td>
                <td>No.KP / Nama Pengadu</td>
                <td>No.KP / Nama Kena Adu</td>
                <td>No. Slip Permohonan</td>
                <td>Tarikh Mohon</td>
                <td>Operasi</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="StaffUpdateApplicationForm.php?aduan_id=2201&txtKp=test&btnSemak=Semak"><img src="img/edit.png" title="Kemaskini" alt="Kemaskini" width="25" height="" border="0"></a>&nbsp;
                    <a href="StaffViewApplicationPage.php"><img src="img/view.png" title="Papar Maklumat Terperinci" alt="Papar Maklumat Terperinci" width="23" height="23" border="0"></a>&nbsp;
                    <a href="ApproveConsultationPage.php?btnSemak=Semak&txtKp=test&aduan_id=2201"><img src="img/result.png" title="Keputusan Permohonan" alt="Keputusan Permohonan" width="25" height="25" border="0"></a>&nbsp;
                    <a href="StaffArrangeSessionPage.php?btnSemak=Semak&txtKp=test&aduan_id=2201"><img src="img/schedule.png" title="Atur Sesi" alt="Atur Sesi" width="25" height="25" border="0"></a>&nbsp;
                    <a href="_delete.php?kod=4&aduan_id=2201&txtKp=test&btnSemak=Semak" onclick='return confirm("Anda pasti mahu PADAM rekod ini?");'><img src="img/cross.png" title="Padam" alt="Padam" width="22" height="22" border="0"></a>
                </td>
            </tr>
            </table>
        </div>
    </body>
</html>