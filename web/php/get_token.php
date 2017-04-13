<?php
    // include("connect.php");

    // header("Access-Control-Allow-Origin: *");

    // $stringData = $_POST['tokenValue']; 
    // echo $stringData

    // $insertToken = "INSERT INTO User_Token VALUES ('$stringData')";
    // $tokenresult = mysqli_query($conn, $sql);

    //  if($tokenresult){
        // echo "Successful";
    // }else {
            // echo("Error description: " . mysqli_error($conn));
    // }

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $token = $_POST['token'];

    echo"[ $token ]";

    // $insertToken = "INSERT INTO User_Token VALUES ('$token')";
    // $tokenresult = mysqli_query($conn, $sql);

    //  if($tokenresult){
        // echo "Successful";
    // }else {
            // echo("Error description: " . mysqli_error($conn));
    // }
?>