<?php
    include("connect.php");

    $sql = "SELECT ID, Oefeningen, Herhalingen, Sets FROM $tbname";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["ID"]. " Oefeningen: " . $row["Oefeningen"]. "- Herhalingen: " .$row["Herhalingen"]. "- Sets: " .$row["Sets"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    
    $conn->close();
?>