<?php
    include("connect.php");

    $stringData = $_POST['dataString'];
    ini_set('display_errors', 1);
    
    $checkToken = "SELECT * FROM Oefeningen WHERE Token =  (' $stringData')";    
    $checkResult = mysqli_query($conn, $checkToken);

    if ($checkResult->num_rows > 0) {

        while($row = $checkResult->fetch_assoc()) {
            $voornaam = $row["Voornaam"];
            $achternaam = $row["Achternaam"];
            $token = $row["Token"];
            $oefening1 = $row['Oefening1'];    
            $oefening2 = $row['Oefening2'];    
            $oefening3 = $row['Oefening3'];    
            $oefening4 = $row['Oefening4'];
            $rep1 = $row['Herhaling1'];
            $rep2 = $row['Herhaling2'];
            $rep3 = $row['Herhaling3'];
            $rep4 = $row['Herhaling4'];
            $set1 = $row['Set1'];
            $set2 = $row['Set2'];    
            $set3 = $row['Set3'];    
            $set4 = $row['Set4'];
            $maingoal = $row['Maingoal'];
            $subgoal = $row['Subgoal'];
            $subgoal2 = $row['Subgoal2'];

            $arr = array(
                    "NAME" => (!empty($voornaam) && !empty($achternaam)) ? array(
                        'Voornaam' => $voornaam,
                        'Achternaam' => $achternaam
                    ) : null,
                    "OEFENING1" => (!empty($oefening1) && !empty($rep1) && !empty($set1)) ? array(
                        'Oefening1' => $oefening1,
                        'Set1' => $set1,
                        'Herhaling1' => $rep1
                    ) : null,
                    "OEFENING2" => (!empty($oefening2) && !empty($rep2) && !empty($set2)) ? array(
                        'Oefening2' => $oefening2,
                        'Set2' => $set2,
                        'Herhaling2' => $rep2
                    ) : null,
                    "OEFENING3" => (!empty($oefening3) && !empty($rep3) && !empty($set3)) ? array(
                        'Oefening3' => $oefening3,
                        'Set3' => $set3,
                        'Herhaling3' => $rep3
                    ) : null,
                    "OEFENING4" => (!empty($oefening4) && !empty($rep4) && !empty($set4)) ? array(
                        'Oefening4' => $oefening4,
                        'Set4' => $set4,
                        'Herhaling4' => $rep4
                    )  : null,
                    "GOALS" => (!empty($maingoal) && !empty($subgoal)) ? array(
                        'Maingoal' => $maingoal,
                        'Subgoal' => $subgoal,
                        'Subgoal2' => $subgoal2
                    ) : null
                );

            echo json_encode($arr);
        }
    } else {
        echo "0 results";
    }
    
    $conn->close();
?>