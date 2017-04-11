<?php
    include("connect.php");
    
    // Get values from form
    $check = trim(implode(', ',$_POST['oefeningen']))
    $reps = $_POST['herhalingen'];
    $sets = $_POST['sets'];
    $name = trim(implode(', ',$_POST['name']));
    $token = $_POST['randomNumber'];

     // Insert data into mysql
    if(!empty($reps) && !empty($sets)){
        $sql= "INSERT INTO `dummy_data`(`Token`,`Naam`, `Oefeningen`, `Herhalingen`, `Sets`) VALUES ('$token', '$name', '$check', '$reps', '$sets')";
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

<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="Opifer.nl">
	<meta name="description" content="">
	<title>Bootstrap</title>

	<link rel="stylesheet" href="css/main.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-offset-2">
                <div class="wrapper">
                    <?php echo $check; ?>
					
				</div>
            </div>
        </div> 
    </div>

	<script src="js/app.js"></script>
</body>
</html>