<?php
    include("connectOefeningen.php");
    include("get_info.php");

    // Get values from form
    $rep1 = $_POST['herhaling1'];
    $rep2 = $_POST['herhaling2'];    
    $rep3 = $_POST['herhaling3'];
    $rep4 = $_POST['herhaling4'];
    $set1 = $_POST['set1'];
    $set2 = $_POST['set2'];    
    $set3 = $_POST['set3'];    
    $set4 = $_POST['set4'];    

    // Insert data into mysql
    // if(!empty($reps) && !empty($sets)){
        $sql= "INSERT INTO `$tbname`(`Herhaling1`, `Herhaling2`, `Herhaling3`, `Herhaling4`, `Set1`, `Set2`, `Set3`, `Set4`) VALUES ('$rep1', '$rep2', '$rep3', '$rep4', '$set1', '$set2', '$set3', '$set4')";
        $result = mysqli_query($conn, $sql);

?>