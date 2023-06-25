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
                &ensp;<a href="UserMainConsultationPage.php" class=pagelink>Aduan / Khidmat Nasihat</a> >> Permohonan Baru
            </div>
            <div class=msg>
                <br><br>
                <p>Ruang yang bertanda (<span class="bold red">*</span>) adalah wajib diisi</p>
            </div>
            <div class=box>
                <?php
                foreach($result as $row) : ?>
                    <form class=consult_form2 name=consult2 action="../../Business/Controller/UserConsultationController.php" method=post>
                    Tujuan Aduan<span class="bold red">*</span><br>
                    <select name="purpose" class=form_input2 onchange="display(this)" required>
                        <option selected>Sila Pilih</option>
                        <option value="1">KHIDMAT NASIHAT</option>
                        <option value="2">PERCERAIAN</option>
                        <option value="3">WALI ENGGAN</option>
                    </select>
                    PAID Pilihan<span class="bold red">*</span><br>
                    <select name="paid" id="paid" class=form_input2 required>
                        <option selected>Sila Pilih</option>
                        <option value="17"  >JABATAN PERKHIDMATAN AWAM</option>
                        <option value="2"  >PEJABAT AGAMA ISLAM BENTONG</option>
                        <option value="3"  >PEJABAT AGAMA ISLAM BERA</option>
                        <option value="4"  >PEJABAT AGAMA ISLAM CAMERON HIGHLANDS</option>
                        <option value="11"  >PEJABAT AGAMA ISLAM JENGKA</option>
                        <option value="12"  >PEJABAT AGAMA ISLAM JERANTUT</option>
                        <option value="13"  >PEJABAT AGAMA ISLAM KUANTAN</option>
                        <option value="16"  >PEJABAT AGAMA ISLAM KUANTAN BARAT</option>
                        <option value="14"  >PEJABAT AGAMA ISLAM LIPIS</option>
                        <option value="15"  >PEJABAT AGAMA ISLAM MARAN</option>
                        <option value="6"  >PEJABAT AGAMA ISLAM MUADZAM SHAH</option>
                        <option value="7"  >PEJABAT AGAMA ISLAM PEKAN</option>
                        <option value="8"  >PEJABAT AGAMA ISLAM RAUB</option>
                        <option value="9"  >PEJABAT AGAMA ISLAM ROMPIN</option>
                        <option value="10"  >PEJABAT AGAMA ISLAM TEMERLOH</option>
                    </select><br>
                    <div id="consult" style="display:none;">
                        <div class=bar>
                            &ensp;MAKLUMAT PENGADU
                        </div>
                        Nama Pengadu<br>
                        <input type="text" name="name" class=form_input2 value="<?php echo $row['User_Name']; ?>" readonly><br>
                        No. K/P / Passport Pengadu<br>
                        <input type="text" name="ic" class=form_input2 value="<?php echo $row['UserIC']; ?>" readonly><br>
                        Tarikh Lahir<br>
                        <input type="date" name="birthday" class=form_input2 value="<?php echo $row['User_DOB']; ?>" readonly><br>
                        Bangsa<br>
                        <input type="text" name="race" class=form_input2 value="<?php echo $row['User_Nationality']; ?>" readonly><br>
                        Alamat Semasa<br>
                        <input type="text" name="race" class=form_input2 value="<?php echo $row['User_CurrentAddress']; ?>" readonly><br>
                        No.Telefon
                        <input type="text" name="phoneNum" class=form_input2 value="<?php echo $row['User_PhoneNumber']; ?>" readonly><br>
                        Sektor Pekerjaan<br>
                        <input type="text" name="jobSector" class=form_input2 value="<?php echo $row['User_JobSector']; ?>" readonly><br>
                        Jawatan
                        <input type="text" name="job_position" class=form_input2 value="<?php echo $row['User_Position']; ?>" readonly><br>
                        Gaji<br>
                        <input type="text" name="phoneNum" class=form_input2 value="<?php echo $row['User_Salary']; ?>" readonly><br>
                        Tahap Pendidikan<br>
                        <input type="text" name="phoneNum" class=form_input2 value="<?php echo $row['User_EducationLevel']; ?>" readonly><br>
                        Pernikahan Kali Ke-<span class="bold red">*</span>
                        <input type="number" name="usermarriageCount" class=form_input2 required><br>

                        <div class=bar>
                            &ensp;MAKLUMAT PASANGAN
                        </div>
                        No. K/P / Passport <span class="bold red">*</span><br>
                        <input type="text" name="spouseic" class=form_input2 required><br>
                        Nama Pasangan <span class="bold red">*</span><br>
                        <input type="text" name="spousename" class=form_input2 required><br>
                        Tarikh Lahir <span class="bold red">*</span><br>
                        <input type="date" name="spousedob" class=form_input2 required><br>
                        Bangsa <span class="bold red">*</span><br>
                        <select name="spouserace" class=form_input2 required>
                        <option value="">-Sila Pilih-</option>
                        <option value="MELAYU"  >MELAYU</option>
                        <option value="CINA"  >CINA</option>
                        <option value="INDIA"  >INDIA</option>
                        <option value="BANGLADESHI"  >BANGLADESHI</option>
                        <option value="PAKISTANI"  >PAKISTANI</option>
                        <option value="SRI LANKA"  >SRI LANKA</option>
                        <option value="INDONESIAN"  >INDONESIAN</option>
                        <option value="BUMIPUTERA SABAH"  >BUMIPUTERA SABAH</option>
                        <option value="BUMIPUTRA SARAWAK"  >BUMIPUTRA SARAWAK</option>
                        <option value="ORANG ASLI (SEMENANJUNG)"  >ORANG ASLI (SEMENANJUNG)</option>
                        <option value="LAIN-LAIN ASIA"  >LAIN-LAIN ASIA</option>
                        <option value="EUROPEAN"  >EUROPEAN</option>
                        <option value="ARAB"  >ARAB</option>
                        <option value="LAIN-LAIN"  >LAIN-LAIN</option>
                        </select><br>
                        Alamat Semasa <span class="bold red">*</span><br>
                        <textarea name = "spouseaddress" rows = "4" cols = "36" 
                        style="width:100%;border: 1px solid #b6b6b6;" required></textarea><br>
                        No.Telefon <span class="bold red">*</span>
                        <input type="text" name="spousephoneNum" class=form_input2 required><br>
                        Sektor Pekerjaan <span class="bold red">*</span><br>
                        <select name="spousejob_sector" class=form_input2 required>
                            <option selected>Sila Pilih</option>
                            <option value="SEKTOR AWAM">SEKTOR AWAM</option>
                            <option value="SEKTOR SWASTA">SEKTOR SWASTA</option>
                            <option value="BEKERJA SENDIRI">BEKERJA SENDIRI</option>
                            <option value="PESARA">PESARA</option>
                            <option value="TIDAK BEKERJA">TIDAK BEKERJA</option>
                        </select><br>
                        Jawatan
                        <input type="text" name="spousejob_position" class=form_input2><br>
                        Gaji<br>
                        <select name="spousesalary" class=form_input2>
                            <option selected>Sila Pilih</option>
                            <option value="01">&gt; RM3,000</option>
                            <option value="02">&gt; RM2,000  &lt; RM2,500</option>
                            <option value="03">&gt; RM1,500  &lt; RM2,000</option>
                            <option value="04">&gt; RM1,000  &lt; RM1,500</option>
                            <option value="05">&gt; RM500  &lt; RM1,000</option>
                            <option value="06">&lt; RM500</option>
                        </select><br>
                        Tahap Pendidikan <span class="bold red">*</span><br>
                        <select name="spouseedulevel" class=form_input2 required>
                            <option selected>Sila Pilih</option>
                            <option value="PHD">PHD</option>
                            <option value="MASTER">MASTER</option>
                            <option value="IJAZAH">IJAZAH</option>
                            <option value="DIPLOMA">DIPLOMA</option>
                            <option value="STPM / HSC / SIJIL">STPM / HSC / SIJIL</option>
                            <option value="SPM / MCE">SPM / MCE</option>
                            <option value="PT3 / PMR / SRP / LC">PT3 / PMR / SRP / LC</option>
                            <option value="UPSR">UPSR</option>
                            <option value="TIADA PENDIDIKAN RASMI">TIADA PENDIDIKAN RASMI</option>
                        </select><br>
                        Pernikahan Kali Ke-<span class="bold red">*</span>
                        <input type="number" name="spousemarriageCount" class=form_input2 required><br>

                        <div class=bar>
                            &ensp;MAKLUMAT PERKAHWINAN
                        </div>
                        Tarikh Perkahwinan<span class="bold red">*</span><br>
                        <input type="date" name="marryDate" class=form_input2 required><br>
                        Jenis Perkahwinan<span class="bold red">*</span><br>
                        <select name="marriageType" class=form_input2 required>
                            <option value="">-Sila Pilih-</option>
                            <option value="MONOGAMI"  >MONOGAMI</option>
                            <option value="POLIGAMI"  >POLIGAMI</option>
                        </select><br>
                        Kedudukan Isteri<span class="bold red">*</span><br>
                        <select name="wifecount" class=form_input2 required>
                            <option selected>Sila Pilih</option>
                            <option value="PERTAMA">PERTAMA</option>
                            <option value="KEDUA">KEDUA</option>
                            <option value="KETIGA">KETIGA</option>
                            <option value="KEEMPAT">KEEMPAT</option>
                        </select><br>
                        Dasar Perkahwinan<span class="bold red">*</span><br>
                        <select name="marriagereasoning" class=form_input2 required>
                            <option selected>Sila Pilih</option>
                            <option value="PILIHAN KELUARGA">PILIHAN KELUARGA</option>
                            <option value="PILIHAN SENDIRI">PILIHAN SENDIRI</option>
                            <option value="PAKSAAN">PAKSAAN</option>
                        </select><br>
                        Bilangan Anak<span class="bold red">*</span><br>
                        Lelaki
                        <input type="number" name="soncount" class=form_input3 required>&emsp;
                        Perempuan
                        <input type="number" name="daughtercount" class=form_input3 required><br>

                        <div class=bar>
                            &ensp;MAKLUMAT PERCERAIAN / RUJU'
                        </div>
                        Perceraian<span class="bold red">*</span>: 
                        <input type="radio" name="divorce" value="Pernah" onclick="display2(this)">Pernah
                        <input type="radio" name="divorce" value="Tidak Pernah" onclick="display2(this)">Tidak Pernah<br>
                        <div id=divorceDetails style="display:none;">
                            Talaq Kali Ke- <span class="bold red">*</span>
                            <select name="talaqcount" class=form_input2 required>
                                <option selected>Sila Pilih</option>
                                <option value="01">Pertama</option>
                                <option value="02">Kedua</option>
                                <option value="03">Ketiga</option>
                            </select><br>
                            Tarikh Bercerai<span class="bold red">*</span><br>
                            <input type="date" name="divorceDate" class=form_input2 required><br>
                            Tarikh Ruju'<br>
                            <input type="date" name="rujuDate" class=form_input2><br>
                            Tarikh Nikah Semula (jika ada)<br>
                            <input type="date" name="remarryDate" class=form_input2><br>
                        </div>
                        <div class=bar>
                            &ensp;MAKLUMAT ADUAN
                        </div>
                        Keterangan Aduan<span class="bold red">*</span><br>
                        <textarea name = "desc" rows = "4" cols = "36" 
                        style="width:100%;border: 1px solid #b6b6b6;" required></textarea><br>
                    </div>
                    <div id="divorce" style="display:none;">
                        <div class=bar>
                            &ensp;MAKLUMAT PENGADU
                        </div>
                            Nama Pengadu<br>
                            <input type="text" name="name" class=form_input2 value="<?php echo $row['User_Name']; ?>" readonly><br>
                            No. K/P / Passport Pengadu<br>
                            <input type="text" name="ic" class=form_input2 value="<?php echo $row['UserIC']; ?>" readonly><br>
                            Tarikh Lahir<br>
                            <input type="date" name="birthday" class=form_input2 value="<?php echo $row['User_DOB']; ?>" readonly><br>
                            Bangsa<br>
                            <input type="text" name="race" class=form_input2 value="<?php echo $row['User_Nationality']; ?>" readonly><br>
                            Alamat Semasa<br>
                            <input type="text" name="address" class=form_input2 value="<?php echo $row['User_CurrentAddress']; ?>" readonly><br>
                            No.Telefon
                            <input type="text" name="phoneNum" class=form_input2 value="<?php echo $row['User_PhoneNumber']; ?>" readonly><br>
                            Sektor Pekerjaan<br>
                            <input type="text" name="jobSector" class=form_input2 value="<?php echo $row['User_JobSector']; ?>" readonly><br>
                            Jawatan
                            <input type="text" name="job_position" class=form_input2 value="<?php echo $row['User_Position']; ?>" readonly><br>
                            Gaji<br>
                            <input type="text" name="phoneNum" class=form_input2 value="<?php echo $row['User_Salary']; ?>" readonly><br>
                            Tahap Pendidikan<br>
                            <input type="text" name="phoneNum" class=form_input2 value="<?php echo $row['User_EducationLevel']; ?>" readonly><br>
                            Pernikahan Kali Ke-<span class="bold red">*</span>
                            <input type="number" name="job_position" class=form_input2 required><br>

                        <div class=bar>
                            &ensp;MAKLUMAT PASANGAN
                        </div>
                            No. K/P / Passport <span class="bold red">*</span><br>
                            <input type="text" name="ic" class=form_input2 required><br>
                            Nama Pasangan<br>
                            <input type="text" name="name" class=form_input2 required><br>

                        <div class=bar>
                            &ensp;MAKLUMAT ADUAN
                        </div>
                            Keterangan Aduan<span class="bold red">*</span><br>
                            <textarea name = "desc" rows = "4" cols = "36" 
                            style="width:100%;border: 1px solid #b6b6b6;" required></textarea><br>
                    </div>
                    <div id="wali" style="display:none;">
                        <div class=bar>
                            &ensp;MAKLUMAT PENGADU
                        </div>
                            Nama Pengadu<br>
                            <input type="text" name="name" class=form_input2 value="<?php echo $row['User_Name']; ?>" readonly><br>
                            No. K/P / Passport Pengadu<br>
                            <input type="text" name="ic" class=form_input2 value="<?php echo $row['UserIC']; ?>" readonly><br>
                            Tarikh Lahir<br>
                            <input type="date" name="birthday" class=form_input2 value="<?php echo $row['User_DOB']; ?>" readonly><br>
                            Bangsa<br>
                            <input type="text" name="race" class=form_input2 value="<?php echo $row['User_Nationality']; ?>" readonly><br>
                            Alamat Semasa<br>
                            <input type="text" name="address" class=form_input2 value="<?php echo $row['User_CurrentAddress']; ?>" readonly><br>
                            No.Telefon
                            <input type="text" name="phoneNum" class=form_input2 value="<?php echo $row['User_PhoneNumber']; ?>" readonly><br>
                            Sektor Pekerjaan<br>
                            <input type="text" name="jobSector" class=form_input2 value="<?php echo $row['User_JobSector']; ?>" readonly><br>
                            Jawatan
                            <input type="text" name="job_position" class=form_input2 value="<?php echo $row['User_Position']; ?>" readonly><br>
                            Gaji<br>
                            <input type="text" name="phoneNum" class=form_input2 value="<?php echo $row['User_Salary']; ?>" readonly><br>
                            Tahap Pendidikan<br>
                            <input type="text" name="phoneNum" class=form_input2 value="<?php echo $row['User_EducationLevel']; ?>" readonly><br>
                            Pernikahan Kali Ke-<span class="bold red">*</span>
                            <input type="number" name="job_position" class=form_input2 required><br>

                        <div class=bar>
                            &ensp;MAKLUMAT WALI
                        </div>
                            No. K/P / Passport<span class="bold red">*</span><br>
                            <input type="text" name="waliic" class=form_input2 required><br>
                            Nama Wali<span class="bold red">*</span><br>
                            <input type="text" name="waliname" class=form_input2 required><br>
                            Hubungan<span class="bold red">*</span><br>
                            <select name="walirelationship" class=form_input2 required>
                            <option value="">-Sila Pilih-</option>
                                <option value="1"  >BAPA</option>
                                <option value="2"  >DATUK SEBELAH BAPA KE ATAS</option>
                                <option value="3"  >ADIK BERADIK LELAKI SEIBU SEBAPA</option>
                                <option value="4"  >ADIK BERADIK LELAKI SEBAPA</option>
                                <option value="5"  >ANAK SAUDARA LELAKI SEBELAH BAPA SEIBU SEBAPA KE BAWAH</option>
                                <option value="6"  >ANAK SAUDARA LELAKI SEBELAH BAPA SEBAPA KE BAWAH</option>
                                <option value="7"  >BAPA SAUDARA SEBELAH BAPA SEIBU SEBAPA</option>
                                <option value="8"  >BAPA SAUDARA SEBELAH BAPA SEBAPA</option>
                                <option value="9"  >ANAK LELAKI BAPA SAUDARA SEBELAH BAPA SEIBU SEBAPA KE BAWAH (SEPUPU LELAKI)</option>
                                <option value="10"  >ANAK LELAKI BAPA SAUDARA SEBELAH BAPA SEBAPA KE BAWAH (SEPUPU LELAKI)</option>
                                <option value="11"  >BAPA SAUDARA BAPA SEIBU SEBAPA</option>
                                <option value="12"  >BAPA SAUDARA BAPA SEBAPA</option>
                                <option value="13"  >ANAK LELAKI BAPA SAUDARA BAPA SEBELAH BAPA SEIBU SEBAPA KE BAWAH</option>
                                <option value="14"  >ANAK LELAKI BAPA SAUDARA BAPA SEBELAH BAPA SEBAPA KE BAWAH</option>
                                <option value="15"  >BAPA SAUDARA DATUK SEBELAH BAPA SEIBU SEBAPA</option>
                                <option value="16"  >BAPA SAUDARA DATUK SEBELAH BAPA SEBAPA</option>
                                <option value="17"  >ANAK LELAKI BAPA SAUDARA DATUK SEBELAH BAPA SEIBU SEBAPA KE BAWAH</option>
                                <option value="18"  >ANAK LELAKI BAPA SAUDARA DATUK SEBELAH BAPA SEBAPA KE BAWAH</option>
                                <option value="19"  >WALI SULTAN</option>
                            </select><br>
                            Tarikh Lahir<span class="bold red">*</span><br>
                            <input type="date" name="walidob" class=form_input2 required><br>
                            Bangsa<span class="bold red">*</span><br>
                            <select name="walirace" class=form_input2 required>
                                <option value="">-Sila Pilih-</option>
                                <option value="01"  >MELAYU</option>
                                <option value="02"  >CINA</option>
                                <option value="03"  >INDIA</option>
                                <option value="04"  >BANGLADESHI</option>
                                <option value="05"  >PAKISTANI</option>
                                <option value="06"  >SRI LANKA</option>
                                <option value="07"  >INDONESIAN</option>
                                <option value="08"  >BUMIPUTERA SABAH</option>
                                <option value="10"  >BUMIPUTRA SARAWAK</option>
                                <option value="12"  >ORANG ASLI (SEMENANJUNG)</option>
                                <option value="13"  >LAIN-LAIN ASIA</option>
                                <option value="14"  >EUROPEAN</option>
                                <option value="15"  >ARAB</option>
                                <option value="16"  >LAIN-LAIN</option>
                            </select><br>
                            Alamat Semasa<span class="bold red">*</span><br>
                            <textarea name = "waliaddress" rows = "4" cols = "36" 
                            style="width:100%;border: 1px solid #b6b6b6;" required></textarea><br>
                            No.Telefon<span class="bold red">*</span>
                            <input type="text" name="waliphoneNum" class=form_input2 required><br>
                            Sektor Pekerjaan<span class="bold red">*</span><br>
                            <select name="walijob_sector" class=form_input2 required>
                                <option selected>Sila Pilih</option>
                                <option value="01">SEKTOR AWAM</option>
                                <option value="02">SEKTOR SWASTA</option>
                                <option value="03">BEKERJA SENDIRI</option>
                                <option value="04">PESARA</option>
                                <option value="05">TIDAK BEKERJA</option>
                            </select><br>
                            Jawatan
                            <input type="text" name="walijob_position" class=form_input2><br>
                            Gaji<br>
                            <select name="walisalary" class=form_input2>
                                <option selected>Sila Pilih</option>
                                <option value="01">&gt; RM3,000</option>
                                <option value="02">&gt; RM2,000  &lt; RM2,500</option>
                                <option value="03">&gt; RM1,500  &lt; RM2,000</option>
                                <option value="04">&gt; RM1,000  &lt; RM1,500</option>
                                <option value="05">&gt; RM500  &lt; RM1,000</option>
                                <option value="06">&lt; RM500</option>
                            </select><br>
                            Tahap Pendidikan<span class="bold red">*</span><br>
                            <select name="waliedulevel" class=form_input2 required>
                                <option selected>Sila Pilih</option>
                                <option value="01">PhD</option>
                                <option value="02">MASTER</option>
                                <option value="03">IJAZAH</option>
                                <option value="04">DIPLOMA</option>
                                <option value="05">STPM / HSC / SIJIL</option>
                                <option value="06">SPM / MCE</option>
                                <option value="07">PT3 / PMR / SRP / LC</option>
                                <option value="08">UPSR</option>
                                <option value="09">TIADA PENDIDIKAN RASMI</option>
                            </select><br>

                        <div class=bar>
                            &ensp;MAKLUMAT ADUAN
                        </div>
                            Keterangan Aduan<span class="bold red">*</span><br>
                            <textarea name = "desc" rows = "4" cols = "36" 
                            style="width:100%;border: 1px solid #b6b6b6;" required></textarea><br>
                    </div>
                    <div style="margin-left:250px;margin-top:20px;">
                        <a href="UserMainConsultationPage.php">
                            <input type="button" class=button value="Kembali">
                            <input type="submit" class=button value="Simpan">
                            <input type="submit" class=button value="Hantar" onclick=updateStatus()>
                        </a>
                    </div>
                <?php 
                endforeach;?>   
            </div>
        </div>
    </body>
</html>