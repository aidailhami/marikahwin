<?php
  class MarriageRegistrationWife {

    public function render(){
      require_once('dbconnect.php');
      require_once('BusinessServices\Controller\UserMarriageRegistrationController.php');
      $this->now = new UserMarriageRegistrationController();
      $this->now->getWife();
      $this->now->submitWifeData();
?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="asset\css\app.css">
</head>
<body>

    <!-- Banner-->
    <?php $id = isset($_GET['userid']) ? $_GET['userid'] : '';?>
    <img src="asset\image\User_headerMunakahat.png" class="bannerimg">
    <!-- Side Navigation Bar-->
    <div class="sidebar">
        <ul class="user">
            <li>IC: </li>
            <li>Nama: </li>
        </ul>
        <ul class="navbar">
            <li><a href="/">Profil</a></li>
            <li><a href="contact">Daftar Kursus Perkahwinan</a></li>
            <li><a href="contact">Permohonan Perkahwinan</a></li>
            <li class="selected"><a>Pendaftaran Perkahwinan</a></li>
                <ul class="navbar2">
                    <li><a class="selected" href="index.php?action=viewList?">Daftar Kahwin</a></li>
                    <li><a href="">Kad Kahwin</a></li>
                </ul>
            <li><a href="UserMainConsultationPage.php">Aduan/Khidmat Nasihat</a></li>
            <li><a href="/profile">Insentif</a></li>
            <li><a href="/profile">Keluar</a></li>
        </ul>
    </div>

    <!-- Top Navigation Bar-->
    <div class="top-navigation">
        <a class="navtitle left-side">Pendaftaran Perkahwinan</a>
        <a class="navtitle">>> Maklumat Isteri</a>
        <div class="right-side">
            <a class="icon"><img src="asset\image\bell.png"></a>
            <a class="icon"><img src="asset\image\profile.png"></a>
        </div>
    </div> 
    <!--Main Content-->
    <div class="content">
        <div> 
            <table class="marriageformnav">
                <tr>
                    <td>Maklumat Suami</td>
                    <td class="active">Maklumat Isteri</td>
                    <td>Maklumat Perkahwinan</td>
                </tr>
            </table>
        </div>
        <!--Wife Details content-->
        <form method="post" >
            <div>
              <table class="marriageform">
                <tr>
                  <td>
                    <label for="nama">Nama Isteri * </label><br>
                    <input class="form" type="text" name="nama" id="nama" value="<?php echo $this->now->getWifeVariable('name'); ?>" required oninvalid="this.setCustomValidity('Sila Isikan Nama')" oninput="this.setCustomValidity('')">
                    <span class="text-15" id="n_error_msg"></span>
                  </td>
                  <td>
                    <label for="kadpengenalan">No. Kad Pengenalan * </label><br>
                    <input class="form" type="text" name="kadpengenalan" id="kadpengenalan" value="<?php echo $this->now->getWifeVariable('ic'); ?>" required oninvalid="this.setCustomValidity('Sila Isikan Kad Pengenalan')" oninput="this.setCustomValidity('')">
                    <span class="text-15" id="kp_error_msg"></span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="tarikh">Tarikh Lahir * </label><br>
                    <input class="form" type="date" name="tarikh" id="tarikh" value="<?php echo $this->now->getWifeVariable('dob'); ?>" onchange="calculateAge();" onclick="calculateAge();" >
                    <span class="text-15" id="tl_error_msg"></span>
                  </td>
                  <td>
                    <label for="umur">Umur </label><br>
                    <input class="form" type="text" name="umur" id="umur" value="<?php echo $this->now->getWifeVariable('age'); ?>" readonly>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="warganegara">Warganegara * </label><br>
                    <select class="form" name="warganegara" id="warganegara" required oninvalid="this.setCustomValidity('Sila Isikan Warganegara')" oninput="this.setCustomValidity('')">
                      <option value="WARGANEGARA" <?php if($this->now->getWifeVariable('nationatility') === "WARGANEGARA"){echo "selected";}?>>WARGANEGARA</option>
                      <option value="BUKAN WARGANEGARA" <?php if($this->now->getWifeVariable('nationatility') === "BUKAN WARGANEGARA"){echo "selected";}?>>BUKAN WARGANEGARA</option>
                    </select>
                  </td>
                  <td>
                    <label for="taraf">Taraf Pendidikan * </label><br>
                    <select class="form" name="taraf" id="taraf" required>
                      <option value="TIADA PENDIDIKAN RASMI" <?php if($this->now->getWifeVariable('education') === "TIADA PENDIDIKAN RASMI"){echo "selected";}?>>TIADA PENDIDIKAN RASMI</option>
                      <option value="UPSR" <?php if($this->now->getWifeVariable('education') === "UPSR"){echo "selected";}?>>UPSR</option>
                      <option value="PT3 / PMR / SRP / LC" <?php if($this->now->getWifeVariable('education') === "PT3 / PMR / SRP / LC"){echo "selected";}?>>PT3 / PMR / SRP / LC</option>
                      <option value="SPM / MCE" <?php if($this->now->getWifeVariable('education') === "SPM / MCE"){echo "selected";}?>>SPM / MCE</option>
                      <option value="STPM / HSC / SIJIL" <?php if($this->now->getWifeVariable('education') === "STPM / HSC / SIJIL"){echo "selected";}?>>STPM / HSC / SIJIL</option>
                      <option value="DIPLOMA" <?php if($this->now->getWifeVariable('education') === "DIPLOMA"){echo "selected";}?>>DIPLOMA</option>
                      <option value="IJAZAH" <?php if($this->now->getWifeVariable('education') === "IJAZAH"){echo "selected";}?>>IJAZAH</option>
                      <option value="MASTER" <?php if($this->now->getWifeVariable('education') === "MASTER"){echo "selected";}?>>MASTER</option>
                      <option value="PHD" <?php if($this->now->getWifeVariable('education') === "PHD"){echo "selected";}?>>PHD</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="bangsa">Bangsa * </label><br>
                    <select class="form" name="bangsa" id="bangsa" required>
                      <option value="MELAYU" <?php if($this->now->getWifeVariable('nationality') === "MELAYU"){echo "selected";}?>>MELAYU</option>
                      <option value="CINA" <?php if($this->now->getWifeVariable('nationality') === "CINA"){echo "selected";}?>>CINA</option>
                      <option value="INDIA" <?php if($this->now->getWifeVariable('nationality') === "INDIA"){echo "selected";}?>>INDIA</option>
                      <option value="BANGLADESHI" <?php if($this->now->getWifeVariable('nationality') === "BANGLADESHI"){echo "selected";}?>>BANGLADESHI</option>
                      <option value="PAKISTANI" <?php if($this->now->getWifeVariable('nationality') === "PAKISTANI"){echo "selected";}?>>PAKISTANI</option>
                      <option value="SRILANKA" <?php if($this->now->getWifeVariable('nationality') === "SRILANKA"){echo "selected";}?>>SRI LANKA</option>
                      <option value="INDONESIA" <?php if($this->now->getWifeVariable('nationality') === "INDONESIA"){echo "selected";}?>>INDONESIAN</option>
                      <option value="SABAH" <?php if($this->now->getWifeVariable('nationality') === "SABAH"){echo "selected";}?>>BUMIPUTERA SABAH</option>
                      <option value="SARAWAK" <?php if($this->now->getWifeVariable('nationality') === "SARAWAK"){echo "selected";}?>>BUMIPUTERA SARAWAK</option>
                      <option value="ORANGASLI" <?php if($this->now->getWifeVariable('nationality') === "ORANGASLI"){echo "selected";}?>>ORANG ASLI (SEMENANJUNG)</option>
                      <option value="LAIN-ASIA" <?php if($this->now->getWifeVariable('nationality') === "LAIN-ASIA"){echo "selected";}?>>LAIN-LAIN ASIA</option>
                      <option value="EUROPEAN" <?php if($this->now->getWifeVariable('nationality') === "EUROPEAN"){echo "selected";}?>>EUROPEAN</option>
                      <option value="ARAB" <?php if($this->now->getWifeVariable('nationality') === "ARAB"){echo "selected";}?>>ARAB</option>
                    </select>
                  </td>
                  <td>
                    <label for="status">Status Sebelum Berkahwin * </label><br>
                    <select class="form" name="status" id="status" required>
                      <option value="ANAK DARA" <?php if($this->now->getWifeVariable('marriagestatus') === "ANAK DARA"){echo "selected";}?>>ANAK DARA</option>
                      <option value="BALU" <?php if($this->now->getWifeVariable('marriagestatus') === "BALU"){echo "selected";}?>>BALU</option>
                      <option value="JANDA" <?php if($this->now->getWifeVariable('marriagestatus') === "JANDA"){echo "selected";}?>>JANDA</option>
                      <option value="JANDA BERHIAS" <?php if($this->now->getWifeVariable('marriagestatus') === "JANDA BERHIAS"){echo "selected";}?>>JANDA BERHIAS</option>
                      <option value="THAYYIB" <?php if($this->now->getWifeVariable('marriagestatus') === "THAYYIB"){echo "selected";}?>>THAYYIB</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="textaddress1">Alamat Dalam K/P * </label><br>
                      <textarea class="form" name="textaddress1" id="textaddress1" required oninvalid="this.setCustomValidity('Sila Isikan Alamat K/P') oninput="this.setCustomValidity('')"><?php echo $this->now->getWifeVariable('curaddress')?></textarea><br>
                      <span class="text-15" id="a_error_msg"></span>
                      <input type="checkbox" id="sameaddress" onchange="checkboxAddress()" <?php if ($this->now->getWifeVariable('curaddress') === $this->now->getWifeVariable('icaddress') && $this->now->getWifeVariable('curaddress') !== ""){echo "checked";}?>><label class="note text-15" for="sameaddress">Tanda Jika Alamat Terkini Sama Dengan Alamat Dalam K/P</label>
                  </td>
                  <td>
                    <label for="textaddress2">Alamat Terkini * </label><br>
                    <textarea class="form" name="textaddress2" id="textaddress2" <?php if($this->now->getWifeVariable('curaddress') === $this->now->getWifeVariable('icaddress') && $this->now->getWifeVariable('curaddress') !== ""){echo "readonly";}?> required oninvalid="this.setCustomValidity('Sila Isikan Alamat Sekarang')" oninput="this.setCustomValidity('')"><?php echo $this->now->getWifeVariable('icaddress');?></textarea><br>
                    <span class="text-15" id="a2_error_msg"></span>
                  </td>
                </tr>
                <tr>    
                  <td>
                    <label for="sektor">Sektor Pekerjaan * </label><br>
                    <select class="form" name="sektor" id="sektor">
                      <option value="TIDAK BEKERJA" <?php if($this->now->getWifeVariable('jobsector') === "TIDAK BEKERJA"){echo "selected";}?>>TIDAK BEKERJA</option>
                      <option value="PESARA" <?php if($this->now->getWifeVariable('jobsector') === "PESARA"){echo "selected";}?>>PESARA</option>
                      <option value="SENDIRI" <?php if($this->now->getWifeVariable('jobsector') === "SENDIRI"){echo "selected";}?>>BEKERJA SENDIRI</option>
                      <option value="SWASTA" <?php if($this->now->getWifeVariable('jobsector') === "SWASTA"){echo "selected";}?>>SEKTOR SWASTA</option>
                      <option value="AWAM" <?php if($this->now->getWifeVariable('jobsector') === "AWAM"){echo "selected";}?>>SEKTOR AWAM</option>
                    </select>
                  </td>
                  <td>
                    <label for="pekerjaan">Nama Pekerjaan * </label><br>
                      <input class="form" type="text" name="pekerjaan" id="pekerjaan" value="<?php echo $this->now->getWifeVariable('position')?>" required oninvalid="this.setCustomValidity('Sila Isikan Nama Pekerjaan')" oninput="this.setCustomValidity('')">
                      <span class="text-15" id="np_error_msg"></span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="pendapatan">Pendapatan (RM) * </label><br>
                      <input class="form" type="text" name="pendapatan" id="pendapatan" value="<?php echo $this->now->getWifeVariable('salary')?>" required oninvalid="this.setCustomValidity('Sila Isikan Pendapatan')" oninput="this.setCustomValidity('')">
                      <span class="text-15" id="pd_error_msg"></span>
                  </td>
                  <td>
                    <label for="telefon">No. Telefon * </label><br>
                      <input class="form" type="text" name="telefon" id="telefon" value="<?php echo $this->now->getWifeVariable('phonenumber')?>" required oninvalid="this.setCustomValidity('Sila Isikan telefon')" oninput="this.setCustomValidity('')">
                      <span class="text-15" id="t_error_msg"></span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="saudara">Saudara Baru </label><br>
                      <select class="form" name="saudara" id="saudara">
                        <option value="TIDAK" <?php if($this->now->getWifeVariable('religion') === "TIDAK"){echo "selected";}?>>TIDAK</option>
                        <option value="YA" <?php if($this->now->getWifeVariable('religion') === "YA"){echo "selected";}?>>YA</option>
                      </select> 
                  </td>
                </tr>
              </table>
            </div>
            <div class="submitarea">
                
                <input class="submitbtn right-side" type="submit" name="submit" value="Seterusnya" >
            </div>
        </form>
    </div>
</body>
</html>

<?php
    }
  }
?>

<script type="text/javascript">
    function checkboxAddress(){
        var checkBox = document.getElementById("sameaddress");
        var addresskp = document.getElementById("textaddress1").value;
        if (checkBox.checked == true){
            document.getElementById("textaddress2").readOnly = true;
            document.getElementById("textaddress2").value = addresskp;
        }else{
            document.getElementById("textaddress2").readOnly = false;
            document.getElementById("textaddress2").value = "";
        }
    }
  
    function calculateAge(){
        var birthDate = document.getElementById("tarikh").value;
        var currentDate = new Date();

        let currenty = currentDate.getFullYear();
        let currentd = currentDate.getDate();
        let currentm = currentDate.getMonth() + 1;
        let year = birthDate.substring(0,4);
        let month = birthDate.substring(5,7);
        let day = birthDate.substring(8,10);

        let age = currenty - year;
  
        if (currentm < month || (currentm === month && currentd < day)) {
          age--;
        }
            var totalage = age + " tahun "; 
            document.getElementById("umur").value = totalage;
    }
</script>
