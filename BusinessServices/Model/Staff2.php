<?php
    
    class Staff2 {
        private $marriageid;
        private $userid;
        private $spouseid;
        private $marriagedetails_ID;
        private $marriageregistrationsupportingid;
        private $applydate;

        function staffDisplayTable() {
            require('dbconnect.php');
            
            $query = "SELECT * FROM marriage_registration INNER JOIN spouse_details ON marriage_registration.SpouseID=spouse_details.SpouseID";
            $result = mysqli_query($conn, $query);
            
            // Check if the query executed successfully
            if ($result) {
                // Start creating the table
                echo '<table>';
                echo '<tr>';
                echo '<th>Bil</th>';
                echo '<th>KP/Nama Pasangan</th>';
                echo '<th>Tarikh</th>';
                echo '<th>Status</th>';
                echo '<th>Operasi</th>';
                echo '</tr>';
                $rowNumber=0;
                // Loop through the result set
                while ($row = mysqli_fetch_assoc($result)) {
                    $rowNumber++;
                    echo '<tr>';
                    echo '<td>' . $rowNumber . '</td>';
                    echo '<td>' . $row['SpouseIC'] . '<br>' . $row['Spouse_Name']. '</td>';
                    echo '<td>' . $row['MarriageRegistration_ApplyDate'] . '</td>';
                    echo '<td>' . $row['MarriageRegistration_Status'] . '</td>';
                    echo "<td> <a href='index.php?action=staffViewMarriageDetail&data=".$row['UserID']."' class='btn operation' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> View</a>";
                    echo " <a href='#edit_".$row['UserID']."' class='btn operation' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>";
                    echo " <a href='#delete_".$row['UserID']."' class='btn operation' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a></td>";
                    echo '</tr>';
                    
                }
            
                // Close the table
                echo '</table>';
            } else {
                // If the query fails, display an error message
                echo 'Error: ' . mysqli_error($conn);
            }

        }
        function staffdisplayTableCard() {
            require('dbconnect.php');
            $userid = $_GET['userid'];
            $query = "SELECT * FROM kad_nikah INNER JOIN spouse_details ON kad_nikah.SpouseID=spouse_details.SpouseID";
            $result = mysqli_query($conn, $query);
            
            // Check if the query executed successfully
            if ($result) {
                // Start creating the table
                echo '<table>';
                echo '<tr>';
                echo '<th>Bil</th>';
                echo '<th>KP/Nama Pasangan</th>';
                echo '<th>Tarikh</th>';
                echo '<th>Status</th>';
                echo '<th>Operasi</th>';
                echo '</tr>';
                $rowNumber=0;
                // Loop through the result set
                while ($row = mysqli_fetch_assoc($result)) {
                    $rowNumber++;
                    echo '<tr>';
                    echo '<td>' . $rowNumber . '</td>';
                    echo '<td>' . $row['SpouseIC'] . '<br>' . $row['Spouse_Name']. '</td>';
                    echo '<td>' . $row['KadNikah_ApplicationDate'] . '</td>';
                    echo '<td>' . $row['KadNikah_Status'] . '</td>';
                    echo "<td> <a href='index.php?action=staffViewMarriageCard&data=".$row['UserID']."' class='btn operation' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> View</a>";
                    //echo " <a href='#edit_".$row['UserID']."' class='btn operation' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>";
                    echo " <a href='#delete_".$row['UserID']."' class='btn operation' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a></td>";
                    echo '</tr>';
                    
                }
            
                // Close the table
                echo '</table>';
            } else {
                // If the query fails, display an error message
                echo 'Error: ' . mysqli_error($conn);
            }

        }
    }



?>