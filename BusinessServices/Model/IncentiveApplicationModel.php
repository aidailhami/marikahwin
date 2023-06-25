<?php
    
    class IncentiveApplicationModel {
        private $marriageid;
        private $userid;
        private $spouseid;
        private $marriagedetails_ID;
        private $marriageregistrationsupportingid;
        private $applydate;

        function displayTable() {
            require($_SERVER['DOCUMENT_ROOT'].'\SDW\sdd\Model\db_connect.php');
            $userid = $_GET['userid'];
            $query = "SELECT * FROM marriage_registration INNER JOIN spouse_details ON marriage_registration.SpouseID=spouse_details.SpouseID WHERE UserID = '$userid'";
            $result = mysqli_query($conn, $query);
            
            
            if ($result) {
                
                echo '<table>';
                echo '<tr>';
                echo '<th>Bil</th>';
                echo '<th>KP/Nama Pasangan</th>';
                echo '<th>Tarikh</th>';
                echo '<th>Status</th>';
                echo '<th>Operasi</th>';
                echo '</tr>';
                $rowNumber=0;
                
                while ($row = mysqli_fetch_assoc($result)) {
                    $rowNumber++;
                    echo '<tr>';
                    echo '<td>' . $rowNumber . '</td>';
                    echo '<td>' . $row['SpouseIC'] . '<br>' . $row['Spouse_Name']. '</td>';
                    echo '<td>' . $row['MarriageRegistration_ApplyDate'] . '</td>';
                    echo '<td>' . $row['MarriageRegistration_Status'] . '</td>';
                    echo "<td> <a href='#_".$row['UserID']."' class='btn operation' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> View</a>";
                    echo " <a href='#edit_".$row['UserID']."' class='btn operation' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>";
                    echo " <a href='#delete_".$row['UserID']."' class='btn operation' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a></td>";
                    echo '</tr>';
                    
                }
            
                
                echo '</table>';
            } else {
                
                echo 'Error: ' . mysqli_error($conn);
            }

        }

    }



?>