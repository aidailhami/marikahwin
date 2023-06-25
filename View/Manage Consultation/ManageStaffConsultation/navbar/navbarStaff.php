<?php
    //session_start();
    $conn = mysqli_connect("localhost", "root", "", "marikahwin");
    if (!$conn) 
    {
        echo 'Connection error: ' . mysqli_connect_error();
    }    

    $id=3000;

    //SQL query
    $sql = "SELECT * FROM staffprofile WHERE StaffProfileID='$id'"
    or die(mysqli_connect_error());

    //Execute the query (the recordset $rs contains the result)
    $result = mysqli_query($conn, $sql);

    foreach($result as $row) :
?>


<div class=sidebar>
    <ul class=staff style="text-align:left;margin-top:20px;">
        <li>ID: <?php echo $row['StaffProfileID']; ?></li>
        <li>Nama: <?php echo $row['StaffName']; ?></li>
        <li>Akses: <?php echo $row['StaffCategoryAccess']; ?></li>
        <li>Jabatan: <?php echo $row['Jabatan']; ?></li>
    </ul>

    <ul class="navbar">
        <li><a href="/">Profil</a></li>
        <li><a href="contact">Daftar Kursus Perkahwinan</a></li>
        <li><a href="contact">Permohonan Berkahwin</a></li>
        <li><a href="/posts/first-post">Daftar Perkahwinan</a></li>
        <li><a href="StaffMainConsultationPage.php">Aduan / Khidmat Nasihat</a></li>
        <li><a href="/profile">Insentif</a></li>
        <li><a href="/profile">Utiliti</a></li>
        <li><a href="/profile">Keluar</a></li>
    </ul>
</div>

<?php 
endforeach;?>