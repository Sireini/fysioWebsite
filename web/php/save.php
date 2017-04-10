<?php
    include("connect.php");
    
    // Get values from form
    $check = trim(implode(', ',$_POST['oefeningen']))
    $reps = $_POST['herhalingen'];
    $sets = $_POST['sets'];    

     // Insert data into mysql
    if(!empty($reps) && !empty($sets)){
        $sql= "INSERT INTO `dummy_data`(`Oefeningen`, `Herhalingen`, `Sets`) VALUES ('$check', '$reps', '$sets')";
        $result = mysqli_query($conn, $sql);

        // if successfully insert data into database, displays message "Successful". 
        if($result){
            echo "Successful";
        }else {
             echo("Error description: " . mysqli_error($conn));
        }
    }else {
        echo "<script type='text/javascript'>alert('Fill in all required fields');</script>";
    }     
?> 