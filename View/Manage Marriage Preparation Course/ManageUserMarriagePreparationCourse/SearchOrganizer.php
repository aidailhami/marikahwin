<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>search for organizer</title>
    <style>
        .sidebar{
    position: absolute;
    bottom: 200px;
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
        
         background-color: white;
         border-top-left-radius: 20px;
         border-top-right-radius: 20px;
         height: 500px;
         }
        table, th, td {
        border:1px solid black;
        }
.page{
    background-color: #99f0e3;
    top: 0px;
    right: 5px;
    width: 100%;
    height: 30px;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    padding-top: 10px;
} 

.kotak{
    padding: 16px;
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
                &ensp;Daftar Kursus Kahwin
        </div>
   <div class=kotak>
    <div class="anjuran" style="display: inline;">
   <form name="caritempat" action=".action.php" method="POST">
            <div class="form-group" align="center">
                    <div class="group" align="left">
                        <label>Pilih Anjuran</label>
                        <select class="form-control" name="txtPaid">
						<option class="hidden" selected disabled>Pilih Anjuran</option>
                        <option value="0" >SEMUA PEJABAT AGAMA DAERAH</option>
                        <option value="1" >JABATAN AGAMA ISLAM NEGERI PAHANG</option>	
                                                <option value="2" >PEJABAT AGAMA ISLAM BENTONG</option>	
                                                <option value="3" >PEJABAT AGAMA ISLAM BERA</option>	
                                                <option value="4" >PEJABAT AGAMA ISLAM CAMERON HIGHLANDS</option>	
                                                <option value="5" >PEJABAT AGAMA ISLAM CHENOR</option>	
                                                <option value="11" >PEJABAT AGAMA ISLAM JENGKA</option>	
                                                <option value="12" >PEJABAT AGAMA ISLAM JERANTUT</option>	
                                                <option value="13" >PEJABAT AGAMA ISLAM KUANTAN</option>	
                                                <option value="16" >PEJABAT AGAMA ISLAM KUANTAN BARAT</option>	
                                                <option value="14" >PEJABAT AGAMA ISLAM LIPIS</option>	
                                                <option value="15" >PEJABAT AGAMA ISLAM MARAN</option>	
                                                <option value="6" >PEJABAT AGAMA ISLAM MUADZAM SHAH</option>	
                                                <option value="7" >PEJABAT AGAMA ISLAM PEKAN</option>	
                                                <option value="8" >PEJABAT AGAMA ISLAM RAUB</option>	
                                                <option value="9" >PEJABAT AGAMA ISLAM ROMPIN</option>	
                                                <option value="10" >PEJABAT AGAMA ISLAM TEMERLOH</option>	
                        						</select>
                    </div>
                    
                    <div class="col-sm-6 form-group" style="display: inline;" >
                         <button type="submit" name="btnCari" class="btn btn-lg btn-info" value="cari">Cari</button>	
                    </div>	
              </div>
    </div>
              <br>
          <div class="col-sm-12">  
          <div class="form-group" align="center">
              <table class="table-content table-bordered table-light table-hover" width="100%" height="80" >
                        <tr align="center">
                          <td width="4%"><span>Bil.</span></td>
                          <td width="17%"><span>Anjuran</span></td> 
                          <td width="20%"><span>Tempat</span></td>          
                          <td width="18%"><span>Tarikh</span></td>
                          <td width="13%"><span>Kapasiti Peserta</span></td>
                          <td width="10%"><span>Kekosongan</span></td>
                          <td width="8%"><span>Papar Lanjut</span></td>	
                          <td width="10%" colspan="2"><span>Daftar Penyertaan</span></td>	  
                        </tr>
			            <tr  height="25">
                           <td colspan="7" align="center" >Sila buat carian untuk mendapatkan senarai... </td>
                           <td colspan="2"> <button type="button" onclick="window.location.href = 'marriagepreparationcourse.php';" style="margin-bottom: 10px;">Daftar Sekarang</button></td>
                        </tr>
                         </table>
              </div>	
            </div>  
            						
        </form> 
</div>
</div>
<div class="containing" style="text-align: right; margin-top: -120px;">
  <div class="submitbutton" style="display: flex; justify-content: space-between;">
   <div class="kembalibutton">
    <button type="button" onclick="window.location.href = 'DocumentForm.php';" style="margin-bottom: 10px;">Kembali</button>
   </div>
  </div>
</div>

</body>
