<?php
    include("connect.php");

    $sqlOmschrijvingen = "SELECT shortOmschrijving1, shortOmschrijving2, shortOmschrijving3, shortOmschrijving4, Omschrijving1, Omschrijving2, Omschrijving3, Omschrijving4 FROM `dummy_data`";
    $result = $conn->query($sqlOmschrijvingen);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $omschrijving1 = $row["Omschrijving1"];            
            $omschrijving2 = $row["Omschrijving2"];            
            $omschrijving3 = $row["Omschrijving3"];            
            $omschrijving4 = $row["Omschrijving4"];

            
            $shortomschrijving1 = $row["shortOmschrijving1"];            
            $shortomschrijving2 = $row["shortOmschrijving2"];            
            $shortomschrijving3 = $row["shortOmschrijving3"];            
            $shortomschrijving4 = $row["shortOmschrijving4"];

            
            echo "ID: " . $shortomschrijving1;
        }
    } else {
        echo("Error description: " . mysqli_error($conn));
    }
    
    $conn->close();
?>