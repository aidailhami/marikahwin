<?php

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'MariKahwin'); 
// Check connection
if (!$conn) {
   echo 'Connection error: ' . mysqli_connect_error();
}

   
?>