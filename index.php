<?php 

require_once('BusinessServices/Controller/UserController.php');
?>
<htmL>
    <body>
<h1 id="index-text">Welcome, <?php if(isset($_SESSION['UserIC'])){
        echo explode(" ", $_SESSION['UserName'])[0];
    }else{
        echo 'Guest';
    } 
    ?> </h1>
    </body>
</html>
