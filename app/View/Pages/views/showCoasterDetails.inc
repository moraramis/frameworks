<?php
    foreach ($rows as $num => $row){
        echo"<h2>Name: ${row['coasterName']}</h2>

        <h3>Park: </h3>
        <p>${row['location']}</p>

        <h3>Track Type: </h3>
        <p>${row['coasterType']}</p>
		
        <h3>Year Created: </h3>
        <p>${row['yearCreated']}</p>

		<h3>Height: </h3>
        <p>${row['height']} ft.</p>
		
		<h3>Ride Time: </h3>
        <p>${row['rideTime']} minutes</p>
		
		<a href = 'index.php'>Back</a>";
    }
    
?>