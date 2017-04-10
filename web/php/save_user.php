<?php
    include("connect.php");
    
    // Get values from form
    $name = trim(implode(', ',$_POST['name']));
    $token = $_POST['randomNumber'];
    

     // Insert data into mysql
        $sql= "INSERT INTO `dummy_data`(`Token`, `Naam`) VALUES ('$token', '$name')";
        $result = mysqli_query($conn, $sql);

        // if successfully insert data into database, displays message "Successful". 
        if($result){
            echo "Successful";
        }else {
             echo("Error description: " . mysqli_error($conn));
        }   
?> 