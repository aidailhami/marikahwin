<?php
    //session_start();
    $conn = mysqli_connect("localhost", "root", "", "marikahwin");
    if (!$conn) 
    {
        echo 'Connection error: ' . mysqli_connect_error();
    }    

    $id=1003;

    //SQL query
    $sql = "SELECT * FROM user WHERE UserID='$id'"
    or die(mysqli_connect_error());

    //Execute the query (the recordset $rs contains the result)
    $result = mysqli_query($conn, $sql);

    foreach($result as $row) :
?>
<div class=sidebar>
    <ul class=user>
        <li>ID : <?php echo $row['UserIC']; ?></li>
        <li>Nama : <?php echo $row['User_Name']; ?></li>
    </ul>

    <ul class="navbar">
        <li><a href="/">Profil</a></li>
        <li><a href="contact">Daftar Kursus Perkahwinan</a></li>
        <li><a href="contact">Permohonan Berkahwin</a></li>
        <li><a href="/posts/first-post">Daftar Perkahwinan</a></li>
        <li><a href="UserMainConsultationPage.php">Aduan / Khidmat Nasihat</a></li>
        <li><a href="/profile">Insentif</a></li>
        <li><a href="/profile">Keluar</a></li>
    </ul>
</div>
<?php 
endforeach;?>