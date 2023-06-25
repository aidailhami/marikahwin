<?php

//session_start();
$conn = mysqli_connect("localhost", "root", "", "marikahwin");

if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

require('../../Business/Model/ConsultationApplication.php');
require('../../Business/Model/SessionDetails.php');
require('../../Business/Model/AdvisorList.php');

?>

<script>
    function display(purpose)
    {
        if(purpose.value==1)
        {
            document.getElementById('consult').style.display ="block";
            document.getElementById('divorce').style.display ="none";
            document.getElementById('wali').style.display ="none";
        }
        else if(purpose.value==2)
        {
            document.getElementById('divorce').style.display ="block";
            document.getElementById('consult').style.display ="none";
            document.getElementById('wali').style.display ="none";
        }
        else
        {
            document.getElementById('wali').style.display ="block";
            document.getElementById('consult').style.display ="none";
            document.getElementById('divorce').style.display ="none";
        }
    }
    function display2(d)
    {
        if(d.value=='Pernah'){
            document.getElementById('divorceDetails').style.display ="block";
        }
        else{
            document.getElementById('divorceDetails').style.display ="none";
        }
    }
</script>

<?php
foreach($result as $row):


endforeach; ?>

