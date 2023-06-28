<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>search for organizer</title>
    <style>
 
.turquoise {
  background-color: turquoise;
  color: black;
}

.sidebar {
  position: absolute;
  bottom: 200px;
  left: 12px;
  width: 20%;
}

ul {
  list-style-type: none;
}

a {
  margin: 0;
  padding: 0;
}

a:hover {
  background-color: white;
  color: black;
  border-radius: 8px;
}

.navbar li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

.user {
  text-align: center;
}

body {
  background-color: turquoise;
}

.navbar {
  list-style-type: none;
}

.user {
  list-style-type: none;
}

.next {
  background-color: white;
}

.container {
  background-color: white;
  top: 0;
  right: 5px;
  width: 100%;
  height: 2100px;
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

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type="text"]:focus,
input[type="password"]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.registerbtn {
  background-color: #04aa6d;
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

a {
  color: dodgerblue;
}

.signin {
  background-color: #f1f1f1;
  text-align: center;
}

.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none;
}

.select-selected {
  background-color: #ddd;
}

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

.select-selected.select-arrow-active:after {
  border-color: transparent transparent black transparent;
  top: 7px;
}

.select-items div,
.select-selected {
  color: black;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

.select-items {
  position: absolute;
  background-color: rgb(162, 175, 189);
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

.select-hide {
  display: none;
}

.select-items div:hover,
.same-as-selected {
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
  color: black;
  border: none;
}

.fa-caret-down {
  float: right;
  padding-right: 8px;
}

.dropdown-container a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-container a:hover {
  background-color: #ddd;
}

.show {
  display: block;
}

.custom-control-input {
  position: relative;
  display: inline-block;
  width: 20px;
  height: 20px;
  margin-left: 20px;
  margin-right: 10px;
  cursor: pointer;
}

.custom-control-input:checked ~ .custom-control-label::before {
  background-color: #2196f3;
  border-color: #2196f3;
}

.custom-control-input:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(33, 150, 243, 0.25);
}

.custom-checkbox .custom-control-label::before {
  border-radius: 0.25rem;
}

.custom-checkbox .custom-control-label::after {
  top: 0.3rem;
  left: 0.65rem;
  width: 0.8rem;
  height: 0.4rem;
  border: 2px solid #fff;
  border-top: none;
  border-left: none;
  transform: rotate(45deg) scaleY(0);
  opacity: 0;
  transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
  content: "";
  position: absolute;
  z-index: 1;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  transform: rotate(45deg) scaleY(1);
  opacity: 1;
  background-color: #2196f3;
  border-color: #2196f3;
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  border-color: #2196f3;
  background-color: #2196f3;
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-color: #2196f3;
  width: 0.4rem;
  height: 0.4rem;
  transform: none;
  border-color: #2196f3;
}

.custom-control-label::before {
  position: absolute;
  top: 0.25rem;
  left: -1.5rem;
  display: block;
  width: 1rem;
  height: 1rem;
  pointer-events: none;
  content: "";
  background-color: #fff;
  border: #adb5bd solid 1px;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
  background-color: #2196f3;
  border-color: #2196f3;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-color: #2196f3;
  width: 0.4rem;
  height: 0.4rem;
  transform: none;
  border-color: #2196f3;
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
        <li><a window.location.href = 'MarriageInformationForm.php'>Daftar Kursus Perkahwinan</a></li>
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
                &ensp;Maklumat Perkahwinan
        </div>

        <div class="containers">
        <table class="table-content table-bordered table-light table-hover" width="10%" height="50" >
                        <tr align="center" class="font14bold">
                        <td align="center" class="font14bold">MAKLUMAT PEMOHON</td>
                        <td>MAKLUMAT PASANGAN</td>
                        <td>MAKLUMAT PERKAHWINAN</td>
        </table>
        <table>
        <tr >
        <th colspan="2" style="width: 50%;"  align="left" >Maklumat Perkahwinan</th>
        </tr>
        </table>
        <br>
        <label for="email"><b>Tarikh Mohon</b></label><br>
        <label for="email"><b>Nama Pemohon</b></label><br>
        <label for="email"><b>Nama Pasangan</b></label><br>
        <label for="email"><b>Tempat Kahwin</b></label><br>
  <br>
        <table>
        <tr >
         <th style="width:3000px" align="left">Maklumat Cadangan Majlis Akad Nikah</th>
        </tr>
        </table>
        </div>
        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Tarikh Akad Nikah<font class="font12boldmerah"> *</font></td>
                        <td align="center">:</td>
                        <td><input type="text" style="width:150px" name="tarikhakad" id="tarikhakad" maxlength="10" autocomplete="off" value="">
                          <font class="font12gray">dd/mm/yyyy</font></td>
                        </tr>
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <br><br>
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Alamat Tempat Nikah<font class="font12boldmerah"> *</font></td>
                        <td align="center">:</td>
                        <td><textarea name="txtAlmtKp" onchange="javascript:this.value=this.value.toUpperCase();" class="font12"></textarea></td>
                        </tr>
                        <br><br>

                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Jenis Mas Kahwin <font class="font12boldmerah">*</font></td>
                        <td align="center">:</td>
                        <td><select name="txtWarga" style="width:240px" >
                                                <option value="">-Sila Pilih-</option>
                                                                        <option value="1" >mahar</option>
                                                </select></td>
                        </tr>
                        <br><br>
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Mas Kahwin</td>
                        <td align="center">:</td>
                        <td><input type="text" name="maskahwin" style="width:240px" maxlength="14" autocomplete="off" value="" /></td>
                        </tr>
                        <br><br>
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Hantaran</td>
                        <td align="center">:</td>
                        <td><input type="text" name="hantaran" style="width:240px" maxlength="14" autocomplete="off" value="" /></td>
                        </tr><br><br>
        <table>
        <tr >
         <th style="width:3000px" align="left">Maklumat Wali</th>
        </tr>
        </table>
        <br>
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Nama Wali</td>
                        <td align="center">:</td>
                        <td><input type="text" name="wali" style="width:240px" maxlength="50" autocomplete="off" value="" /></td>
                        </tr>
                        <br><br>
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Nombor Kad Pengenalan Wali</td>
                        <td align="center">:</td>
                        <td><input type="text" name="kpwali" style="width:240px" maxlength="12" autocomplete="off" value="" /></td>
                        </tr>
                        <br><br>
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Alamat Waali<font class="font12boldmerah"> *</font></td>
                        <td align="center">:</td>
                        <td><textarea name="alamatwali" onchange="javascript:this.value=this.value.toUpperCase();" class="font12"></textarea></td>
                        </tr>
                        <br><br>
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Tarikh Lahir Wali<font class="font12boldmerah"> *</font></td>
                        <td align="center">:</td>
                        <td><input type="text" style="width:150px" name="tarikhlahirwali" id="tarikhakad" maxlength="10" autocomplete="off" value="">
                          <font class="font12gray">dd/mm/yyyy</font></td>
                        </tr>
                        <br><br>
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; No. Telefon Wali</td>
                        <td align="center">:</td>
                        <td><input type="text" name="telefonwali" style="width:240px" maxlength="14" autocomplete="off" value="" /></td>
                        </tr>
                        <br><br>
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Hubungan <font class="font12boldmerah">*</font></td>
                        <td align="center">:</td>
                        <td><select name="hubunganwali" style="width:240px" >
                                                <option value="">-Sila Pilih-</option>
                                                                        <option value="1" >Bapa</option>
                                                </select></td>
                        </tr>
                        <br><br>
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Tarikh Nikah Ibu Bapa<font class="font12boldmerah"> *</font></td>
                        <td align="center">:</td>
                        <td><input type="text" style="width:150px" name="tarikhnikahibubapa" id="tarikhakad" maxlength="10" autocomplete="off" value="">
                          <font class="font12gray">dd/mm/yyyy</font></td>
                        </tr>
                        <br><br>
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Nombor Sijil Nikah</td>
                        <td align="center">:</td>
                        <td><input type="text" name="nomborsijilnikah" style="width:240px" maxlength="14" autocomplete="off" value="" /></td>
                        </tr>
                        <br><br>
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Nama Pelulus Surat Sumpah</td>
                        <td align="center">:</td>
                        <td><input type="text" name="namasumpah" style="width:240px" maxlength="50" autocomplete="off" value="" /></td>
                        </tr>
                        <br><br>

                        <table>
        <tr >
         <th style="width:3000px" align="left">Maklumat Saksi</th>
        </tr>
        </table>
                       <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Nama Saksi (1)</td>
                        <td align="center">:</td>
                        <td><input type="text" name="namasaksi1" style="width:240px" maxlength="50" autocomplete="off" value="" /></td>
                        </tr>
                        <br><br>
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Nombor Kad Pengenalan Saksi (1)</td>
                        <td align="center">:</td>
                        <td><input type="text" name="kpsaksi1" style="width:240px" maxlength="12" autocomplete="off" value="" /></td>
                        </tr>
                        <br><br>
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Alamat Saksi (1)<font class="font12boldmerah"> *</font></td>
                        <td align="center">:</td>
                        <td><textarea name="alamatsaksi1" onchange="javascript:this.value=this.value.toUpperCase();" class="font12"></textarea></td>
                        </tr>
                        <br><br>
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; No. Telefon Saksi (1)</td>
                        <td align="center">:</td>
                        <td><input type="text" name="telefonaksi1" style="width:240px" maxlength="14" autocomplete="off" value="" /></td>
                        </tr>
                        <br><br>
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Nama Saksi (2)</td>
                        <td align="center">:</td>
                        <td><input type="text" name="namasaksi2" style="width:240px" maxlength="50" autocomplete="off" value="" /></td>
                        </tr>
                        <br><br>
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Nombor Kad Pengenalan Saksi (2)</td>
                        <td align="center">:</td>
                        <td><input type="text" name="kpsaksi2" style="width:240px" maxlength="12" autocomplete="off" value="" /></td>
                        </tr>
                        <br><br>
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; Alamat Saksi (2)<font class="font12boldmerah"> *</font></td>
                        <td align="center">:</td>
                        <td><textarea name="alamatsaksi2" onchange="javascript:this.value=this.value.toUpperCase();" class="font12"></textarea></td>
                        </tr>
                        <br><br>
                        <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>&nbsp; No. Telefon Saksi (2)</td>
                        <td align="center">:</td>
                        <td><input type="text" name="telefonaksi2" style="width:240px" maxlength="14" autocomplete="off" value="" /></td>
                        </tr>

 



    </div>
<br>
<br>
     </form>
     <div class="containing" style="text-align: right; margin-top: -100px;">
  <div class="submitbutton" style="display: flex; justify-content: space-between;">
  <div class="kembalibutton">
    <button type="button" onclick="window.location.href = 'PartnerPersonalInformationForm.php';" style="margin-bottom: 10px;">Kembali</button>
</div>
    <button type="button" onclick="window.location.href = 'DocumentForm.php';" style="margin-bottom: 10px;">Seterusnya</button>
  </div>
</div>
</div>
</body>

<script language="">
	
</script>

</html>
