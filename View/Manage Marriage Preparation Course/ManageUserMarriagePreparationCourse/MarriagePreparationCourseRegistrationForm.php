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
        
        background-color: white;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        height: 1680px;
        }
        
        
        input[type=text], input[type=password], input[type=date] {
  width: 95%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=date]:focus{
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
  background-color: turquoise;
  color: white;
  padding: 16px 20px;
  margin: 8px 8px;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
    justify-content: 100px;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

.kembali {
  background-color: white;
  color: turquoise;
  border-color: turquoise;
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
<form action="/action_page.php">
    <div class="container">
      <h1>Daftar Kursus Kahwin</h1>
      <p>Anjuran              : </p>
      <p>Tempat dan Tarikh    : </p>
      <p>Masukkan Maklumat </p>
      <hr>
  
      <label for="Name"><b>Nama</b></label>
      <input type="text" placeholder="Masukkan Nama" name="name" id="name" required>
  
      <label for="kp"><b>No kad pengenalan</b></label>
      <input type="text" placeholder="Masukkan Kad Pengenalan " name="kadpengenalan" id="kadpengenalan" required>
  
      <label for="birthdate"><b>Tarikh Lahir</b></label>
      <input type="date" placeholder=" " name="birthdate" id="birthdate" required>

      <label for="Umur"><b>Umur</b></label>
      <input type="text" placeholder="Masukkan Umur" name="umur" id="umur" required>

      <label for="jantina"><b>jantina</b></label>
      <input type="text" placeholder="Masukkan jantina" name="jantina" id="jantina" required>

      <label for="Name"><b>Nama</b></label>
      <input type="text" placeholder="Masukkan Nama" name="name" id="name" required>

      <label for="psw"><b>Bangsa</b></label>
      <div class="custom-select" style="width:500px;">
        <select>
            <option value="00">Pilih Bangsa:</option>
            <option value="01" >MELAYU</option>
            <option value="02" >CINA</option>
            <option value="03" >INDIA</option>
            <option value="04" >LAIN-LAIN</option>
        </select>
      </div><br>

      <label for="psw"><b>Warganegara</b></label>
      <div class="custom-select" style="width:500px;">
        <select>
            <option value="00">Pilih Warganegara:</option>
            <option value="01" >Warganegara</option>
            <option value="02" >Pilih Warganegara</option>
        </select>
      </div><br>

      <label for="alamatkp"><b>Alamat dalam K/P</b></label>
      <input type="text" placeholder="Masukkan Alamat " name="alamatkp" id="alamatkp" required>
  
      <label for="alamat"><b>Alamat</b></label>
      <input type="text" placeholder="Masukkan Alamat " name="alamat" id="alamat" required>

      <label for="psw"><b>Negeri</b></label>
      <div class="custom-select" style="width:500px;">
        <select>
            <option value="00">Pilih Negeri:</option>
            <option value="01" >JOHOR</option>
            <option value="02" >KEDAH</option>
            <option value="03" >KELANTAN</option>
            <option value="04" >MELAKA</option>
            <option value="05" >NEGERI SEMBILAN</option>
            <option value="06" >PAHANG</option>
            <option value="08" >PERAK</option>
            <option value="09" >PERLIS</option>
            <option value="07" >PULAU PINANG</option>
            <option value="12" >SABAH</option>
            <option value="13" >SARAWAK</option>
            <option value="10" >SELANGOR</option>
            <option value="11" >TERENGGANU</option>
            <option value="14" >WILAYAH PERSEKUTUAN KUALA LUMPUR</option>
            <option value="15" >WILAYAH PERSEKUTUAN LABUAN</option>
            <option value="16" >WILAYAH PERSEKUTUAN PUTRAJAYA</option>
        </select>
      </div>
      <br>
      <label for="psw"><b>Daerah</b></label>
      <div class="custom-select" style="width:500px;">
        <select>
            <option value="00">Pilih Daerah:</option>
        </select>
      </div><br>

      <label for="notelbimbit"><b>Nombor Telefon Bimbit</b></label>
      <input type="text" placeholder="Masukkan Nombor Telefon Bimbit " name="notelbimbit" id="notelbimbit" required>
  
      <label for="notelbimbit"><b>Nombor Telefon Rumah</b></label>
      <input type="text" placeholder="Masukkan Nombor Telefon Rumah " name="notelrumah" id="notelbrumah" required>

      <label for="psw"><b>Taraf Pendidikan</b></label>
      <div class="custom-select" style="width:500px;">
        <select>
            <option value="00">Pilih taraf pendidkan:</option>
            <option value="01" >UPSR</option>
            <option value="02" >PMR/PT3</option>
            <option value="03" >SPM</option>
            <option value="04" >DIPLOMA</option>
            <option value="05" >IJAZAH SARJANA MUDA</option>
            <option value="06" >IJAZAH SARJANA</option>
        </select>
      </div>
      <br>
      <label for="psw"><b>Sektor Pekerjaan</b></label>
      <div class="custom-select" style="width:500px;">
        <select>
            <option value="00">Pilih Sektor Pekerjaan:</option>
            <option value="01" >Pendidkan</option>
            <option value="02" >Swasta</option>
            <option value="03" >Pertanian</option>
        </select>
      </div><br>

      <label for="jawatan"><b>Pekerjaan/Jawatan</b></label>
      <input type="text" placeholder="Masukkan pekerjaan/jawatan " name="jawatan" id="jawatan" required>
      <button type="submit" class="registerbtn" onclick="window.location.href = 'searchorganizer.php';" style="kembali;">Kembali</button>
      <button type="submit" class="registerbtn" onclick="window.location.href = 'UploadPaymentInformation.php';" >Seterusnya</button>
    </div>
  </form>
  
</div>
 
<script>
    var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
      selElmnt = x[i].getElementsByTagName("select")[0];
      ll = selElmnt.length;
      /*for each element, create a new DIV that will act as the selected item:*/
      a = document.createElement("DIV");
      a.setAttribute("class", "select-selected");
      a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
      x[i].appendChild(a);
      /*for each element, create a new DIV that will contain the option list:*/
      b = document.createElement("DIV");
      b.setAttribute("class", "select-items select-hide");
      for (j = 1; j < ll; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
              if (s.options[i].innerHTML == this.innerHTML) {
                s.selectedIndex = i;
                h.innerHTML = this.innerHTML;
                y = this.parentNode.getElementsByClassName("same-as-selected");
                yl = y.length;
                for (k = 0; k < yl; k++) {
                  y[k].removeAttribute("class");
                }
                this.setAttribute("class", "same-as-selected");
                break;
              }
            }
            h.click();
        });
        b.appendChild(c);
      }
      x[i].appendChild(b);
      a.addEventListener("click", function(e) {
          /*when the select box is clicked, close any other select boxes,
          and open/close the current select box:*/
          e.stopPropagation();
          closeAllSelect(this);
          this.nextSibling.classList.toggle("select-hide");
          this.classList.toggle("select-arrow-active");
        });
    }
    function closeAllSelect(elmnt) {
      /*a function that will close all select boxes in the document,
      except the current select box:*/
      var x, y, i, xl, yl, arrNo = [];
      x = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      xl = x.length;
      yl = y.length;
      for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
          arrNo.push(i)
        } else {
          y[i].classList.remove("select-arrow-active");
        }
      }
      for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
          x[i].classList.add("select-hide");
        }
      }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
    </script>
    
</body>
