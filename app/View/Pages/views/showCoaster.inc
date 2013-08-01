<?php
    echo "<h2>Rollercoaster Names</h2>";
    foreach ($rows as $num => $row){
        $c_id = $row['coasterId'];
        echo "</br><h3><a href='coasterInfo.php?id=" . mysql_real_escape_string($c_id) . "'>${row['coasterName']}</a></h2>";
        
    }
?>