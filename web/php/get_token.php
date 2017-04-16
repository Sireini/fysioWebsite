<?php
    include("connect.php");

    $stringData = $_POST['dataString'];    
    echo "<p>" . $stringData ."</p>";

    ini_set('display_errors', 1);

    // $insertToken = "INSERT INTO User_Token(Oefening_Token) VALUES ('$stringData')";
    // $tokenresult = mysqli_query($conn, $insertToken);

    // if($tokenresult){
    //     echo "Successful";
    // }else {
    //     echo "Error description: " .  (mysqli_error($conn));
    // }
?>