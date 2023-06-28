
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Personal Information</title>
    <style>
        .turquoise {
            background-color: turquoise;
             color: black;}

        .sidebar{
    position: absolute;
    bottom: 150px;
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
            background-color: turquoise;
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
    
            padding: 16px;
  background-color: white;
        }
        input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color:#ddd;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent black transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: black;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: rgb(162, 175, 189);
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
th {
  background-color: turquoise;
}
.dropdown-container {
  display: none;
  background-color: #84d9d9;
 
}
.dropdown-btn {
  
  text-decoration: none;
  display: block;
  background: none;
  width: 15%;
  text-align: left;
  cursor: pointer;
  outline: none;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td{
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}
.container {
  background-color: white;
  top: 0;
  right: 5px;
  width: 100%;
  height: 1420px;
  border-top-left-radius: 20px;
  border-top-right-radius: 20px;
  padding-top: 0px;
  padding-left: 0px;
  padding-right: 0px;
}

.page {
  background-color: #99f0e3;
  top: 0;
  right: 5px;
  width: 100%;
  height: 30px;
  border-top-left-radius: 20px;
  border-top-right-radius: 20px;
  padding-top: 10px;
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
    </style>
    <div class="logo"><img src="/sdwproject/assets/User_headerMunakahat.png" style= "width:100%; height: 10%"  ></div>
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
                &ensp;Maklumat Peribadi
        </div>

        <div class="containers">
   <form action="action_page.php" style="border:1px solid #ccc">
    <table class="table-content table-bordered table-light table-hover" width="10%" height="50" >
                        <tr align="center">
                        <td align="center">MAKLUMAT PEMOHON</td>
                        <td>MAKLUMAT PASANGAN</td>
                        <td>MAKLUMAT PERKAHWINAN</td>
     </table>
    </div>
<br>
<br>
     </form>
     <div class="containing">
      <!--forapplicant-->
                        <table cellpadding="1" cellspacing="1" align="center" width="100%" >
            
                        <tr  class="font12" height="30">
                        <td width="25%">&nbsp; No. KP Baru</td>
                        <td width="2%" align="center">:</td>
                        <td><input type="text" name="pemohon" style="width:300px" maxlength="100" autocomplete="off" value="<?php echo $row['UserIC']; ?>" /></td>
                        </tr>
                              
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Nama Pemohon</td>
                        <td align="center">:</td>
                        <td><input type="text" name="pemohon" style="width:300px" maxlength="100" autocomplete="off" value="" /></td>
                        </tr>
                        
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; No. KP Lama/Tentera/Polis</td>
                        <td align="center">:</td>
                        <td><input type="text" name="Tentera" maxlength="16" autocomplete="off" value=""  style="width:240px" onChange="javascript:this.value=this.value.toUpperCase();"></td>
                        </tr>
                                        
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Tarikh Lahir*</td>
                        <td align="center">:</td>
                        <td><input type="text" style="width:150px" name="txtTkhLahir" id="txtTkhLahir" maxlength="10" autocomplete="off" value="">
                        <font class="font12gray">dd/mm/yyyy</font></td>
                        </tr>                      
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Jantina </td>
                        <td align="center">:</td>
                        <td class="font12gray">PEREMPUAN</td>
                        </tr>
                        
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Bangsa <font class="font12boldmerah">*</font></td>
                        <td align="center">:</td>
                        <td><select name="txtBangsa" style="width:240px">
                                                <option value="">-Sila Pilih-</option>
                                                                        <option value="01" >MELAYU</option>
                                                                        <option value="02" >CINA</option>
                                                                        <option value="03" >INDIA</option>
                                                                        <option value="04" >BANGLADESHI</option>
                                                                        <option value="05" >PAKISTANI</option>
                                                                        <option value="06" >SRI LANKA</option>
                                                                        <option value="07" >INDONESIAN</option>
                                                                        <option value="08" >BUMIPUTERA SABAH</option>
                                                                        <option value="10" >BUMIPUTRA SARAWAK</option>
                                                                        <option value="12" >ORANG ASLI (SEMENANJUNG)</option>
                                                                        <option value="13" >LAIN-LAIN ASIA</option>
                                                                        <option value="14" >EUROPEAN</option>
                                                                        <option value="15" >ARAB</option>
                                                </select></td>
                        </tr>
                        
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Warganegara <font class="font12boldmerah">*</font></td>
                        <td align="center">:</td>
                        <td><select name="txtWarga" style="width:240px" >
                                                <option value="">-Sila Pilih-</option>
                                                                        <option value="1" >WARGANEGARA</option>
                                                </select></td>
                        </tr>
                      
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Alamat Dalam K/P<font class="font12boldmerah"> *</font></td>
                        <td align="center">:</td>
                        <td><textarea name="txtAlmtKp" onchange="javascript:this.value=this.value.toUpperCase();" class="font12"></textarea></td>
                        </tr>
                      
                        <tr bgcolor="#FFFFFF" class="font11gray" height="30">
                        <td align="right"></td>
                        <td align="center">:</td>
                        <td><input type="checkbox" name="txtSama" value="1"  onClick="document.forms[0].submit()">
                        <em>Tanda Jika Alamat Semasa Sama Dengan Alamat Dalam K/P</em></td>
                        </tr>
                        
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Alamat Semasa <font class="font12boldmerah">*</font></td>
                        <td align="center">:</td>
                        <td><textarea name="txtAlmtSms" onchange="javascript:this.value=this.value.toUpperCase();" class="font12"></textarea>
                        </td>
                        </tr>
                      
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; No. Telefon (Rumah)</td>
                        <td align="center">:</td>
                        <td><input type="text" name="txtTelR" style="width:240px" maxlength="14" autocomplete="off" value="" /></td>
                        </tr>
                        
                        <tr height="30">
                        <td>&nbsp; No. Telefon (Bimbit) <font class="font12boldmerah">*</font></td>
                        <td align="center">:</td>
                        <td><input type="text" name="txtTelB" style="width:240px;" maxlength="14" autocomplete="off" value="" /></td>
                        </tr>
                      
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Taraf Pendidikan <font class="font12boldmerah">*</font></td>
                        <td align="center">:</td>
                        <td><select name="txtTahap" style="width:240px">
                                                <option value="">-Sila Pilih-</option>
                                                                        <option value="1" >PHD</option>
                                                                        <option value="2" >MASTER</option>
                                                                        <option value="3" >IJAZAH</option>
                                                                        <option value="4" >DIPLOMA</option>
                                                                        <option value="5" >STPM / HSC / SIJIL</option>
                                                                        <option value="6" >SPM / MCE</option>
                                                                        <option value="7" >PT3 / PMR / SRP / LC</option>
                                                                        <option value="8" >UPSR</option>
                                                                        <option value="9" >TIADA PENDIDIKAN RASMI</option>
                                                </select></td>
                        </tr>
                      
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Sektor Pekerjaan <font class="font12boldmerah">*</font></td>
                        <td align="center">:</td>
                        <td><select name="txtSektor" style="width:240px">
                                                <option value="">-Sila Pilih-</option>
                                                                        <option value="1" >SEKTOR AWAM</option>
                                                                        <option value="2" >SEKTOR SWASTA</option>
                                                                        <option value="3" >BEKERJA SENDIRI</option>
                                                                        <option value="4" >PESARA</option>
                                                                        <option value="5" >TIDAK BEKERJA</option>
                                                </select></td>
                        </tr>
                      
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Pekerjaan/Jawatan </td>
                        <td align="center">:</td>
                        <td><input type="text" name="txtJawatan" autocomplete="off" maxlength="100" onchange="javascript:this.value=this.value.toUpperCase();document.forms['0'].submit()" value="" /></td>
                        </tr>
                        
                                              
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Alamat Tempat Kerja </td>
                        <td align="center">:</td>
                        <td ><textarea name="txtAlmtPej" onchange="javascript:this.value=this.value.toUpperCase();" ></textarea></td>
                        </tr>
                        
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; No. Telefon (Pejabat)</td>
                        <td align="center">:</td>
                        <td><input type="text" style="width:240px" name="txtTelP" maxlength="15" autocomplete="off" value="" /></td>
                        </tr>
                      
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Status Kahwin <font class="font12boldmerah">*</font></td>
                        <td align="center">:</td>
                        <td><select name="StatusKhwn" onchange="document.forms['0'].submit()" style="width:240px">
                                                <option value="">-Sila Pilih-</option>
                                                                        <option value="5" >ANAK DARA</option>
                                                                        <option value="6" >BALU</option>
                                                                        <option value="7" >JANDA</option>
                                                                        <option value="8" >JANDA BERHIAS</option>
                                                                        <option value="9" >THAYYIB</option>
                                                </select></td>
                        </tr>
                                           
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Status Saudara Baru <font class="font12boldmerah">*</font></td>
                        <td align="center">:</td>
                        <td><select name="Muallaf" style="width:240px" onchange="document.forms['0'].submit()">
                                                <option value="">-Sila Pilih-</option>
                                                                        <option value="1" >YA</option>
                                                                        <option value="2" >TIDAK</option>
                                                </select></td>
                        </tr>
                </td></tr></table>
                 </table>
                <div class="containing" style="text-align: right; margin-top: 10px;">
  <div class="submitbutton" style="display: flex; justify-content: space-between;">
  <div class="kembalibutton">
    <button type="button" onclick="window.location.href = 'PartnerPersonalInformationForm.php';" style="margin-bottom: 10px;">Kembali</button>
</div>
    <button type="button" onclick="window.location.href = 'PartnerPersonalInformationForm.php';" style="margin-bottom: 10px;">Seterusnya</button>
  </div>
</div>

</div>
                        </table>
            </div>
        </div>
    </div>
</body>
</html>

