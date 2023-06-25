<?php
    //session_start();
    $conn = mysqli_connect("localhost", "root", "", "marikahwin");
    if (!$conn) 
    {
        echo 'Connection error: ' . mysqli_connect_error();
    }    

    require('../../Business/Controller/UserConsultationController.php');
?>

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
                &ensp;Aduan / Khidmat Nasihat
            </div>
            <!--Check IC Kena Adu-->
            <form class=consult_form1 method="post">
                No. K/P / Passport Kena Adu<br>
                <input type="text" name="ICKenaAdu" class=form_input1 style="text-align:center;"><br>
                <p class=subtext>*sila masukkan no. K/P wali enggan sekiranya aduan adalah tentang Wali Enggan</p>
                <input type="submit" class=button value="Semak" onsubmit=check()>
            </form>
            <div class=p1>
                Sila klik 'Daftar Baru' jika ingin membuat aduan / khidmat nasihat baru&ensp;
                <a href="UserApplyConsultationForm.php">
                    <input type="button" class=button value="Daftar Baru">
                </a>
            </div><br>
            <div name=checktable>
            <?php
            //call data from user table
            foreach($result as $row) : ?>
            <!--Display table-->
            <table style="border: 1px solid turquoise;background-color: white;">
            <tr style="background-color: #99f0e3;padding: 5px;">
                <td>Bil.</td>
                <td>No.KP / Nama Pengadu</td>
                <td>No.KP / Nama Pasangan/Kena Adu</td>
                <td>Tarikh Aduan</td>
                <td>Status</td>
                <td>Operasi</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td></td>
                <td></td>
                <td>
                    <a href="UserUpdateApplicationForm.php"><img src="img/edit.png" title="Kemaskini" alt="Kemaskini" width="25" height="" border="0"></a>&nbsp;
                    <a href="UserViewApplicationPage.php"><img src="img/view.png" title="Papar Maklumat Terperinci" alt="Papar Maklumat Terperinci" width="23" height="23" border="0"></a>&nbsp;
                    <a href="frmNasihat_cetak.php?btnSemak=Semak&txtKp=test&aduan_id=2201"><img src="img/print2.png" title="Cetak" alt="Cetak" width="25" height="25" border="0"></a>&nbsp;
                    <a href="UserViewSessionPage.php"><img src="img/schedule.png" title="Papar Sesi" alt="Papar Sesi" width="25" height="" border="0"></a>&nbsp;
                    <a href="_delete.php?kod=4&aduan_id=2201&txtKp=test&btnSemak=Semak" onclick='return confirm("Anda pasti mahu PADAM rekod ini?");'><img src="img/cross.png" title="Padam" alt="Padam" width="22" height="22" border="0"></a>
                </td>
            </tr>
            </table>
            <?php 
            endforeach;?>  
        </div>
    </body>
</html>