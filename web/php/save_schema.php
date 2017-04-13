<?php
    include("connect.php");

    // Get values from form
    $name = trim(implode(', ',$_POST['name']));
    $oefening1 = $_POST['oefening1'];    
    $oefening2 = $_POST['oefening2'];    
    $oefening3 = $_POST['oefening3'];    
    $oefening4 = $_POST['oefening4'];
    $rep1 = $_POST['herhaling1'];
    $rep2 = $_POST['herhaling2'];
    $rep3 = $_POST['herhaling3'];
    $rep4 = $_POST['herhaling4'];
    $set1 = $_POST['set1'];
    $set2 = $_POST['set2'];    
    $set3 = $_POST['set3'];    
    $set4 = $_POST['set4'];
    $token = $_POST['token'];

    // Insert data into mysql
    // if(!empty($reps) && !empty($sets)){
        $sql= "INSERT INTO Oefeningen(Naam, Token, Oefening1, Set1, Herhaling1, Oefening2, Set2, Herhaling2, Oefening3, Set3, Herhaling3, Oefening4, Set4, Herhaling4) VALUES ('$name','$token', '$oefening1', '$set1', '$rep1', '$oefening2', '$set2', '$rep2', '$oefening3', '$set3', '$rep3', '$oefening4', '$set4', '$rep4')";
        $result = mysqli_query($conn, $sql);

        // if successfully insert data into database, displays message "Successful". 
        if($result){
            echo "Successful";
        }else {
             echo("Error description: " . mysqli_error($conn));
        }
    // }else {
    //     echo "<script type='text/javascript'>alert('Fill in all required fields');</script>";
    // }     

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

	<link rel="stylesheet" href="../css/main.css">
</head>
<body>

    <div class="container m-y-md">
        <div class="row">
            <div class="col-lg-8 col-offset-2">
                <div class="wrapper">  
                    <!--main-->
                    <form action="save_schema.php" method="post">
                        <?php if (!empty($oefening1)): ?>
                        <div class="col-sm-3">                        
                                <div class="panel panel-default">
                                    <div class="panel-thumbnail"><img src="../img/<?=$oefening1 ?>.jpg" alt="test" class="img-responsive"/></div>
                                    <div class="panel-body">
                                        <?php echo "<p class='lead'>". $oefening1 . "</p>";?>

                                        <div class="form-group form-group-sm">
                                            <label for="reps1" class="shortdescription">Herhalingen oefening 1:</label>
                                            <input type="number" name="herhaling1" id="reps1" class="form-control">
                                        </div>
                                        <div class="form-group form-group-sm">
                                            <label for="set1" class="shortdescription">Sets oefening 1:</label>
                                            <input type="number" name="set1" id="set1" class="form-control">
                                        </div>
                                    </div>
                                </div>                            
                            </div><!--/col-->
                        <?php endif; ?>

                        <?php if (!empty($oefening2)): ?>
                        <div class="col-sm-3">                        
                                <div class="panel panel-default">
                                    <div class="panel-thumbnail"><img src="../img/<?=$oefening2 ?>.jpg" alt="test" class="img-responsive"/></div>
                                    <div class="panel-body">
                                        <?php echo "<p class='lead'>".$oefening2. "</p>";?>
                                    </div>
                                </div>                            
                            </div><!--/col-->
                        <?php endif; ?>                   
                            
                        <?php if (!empty($oefening3)): ?>
                        <div class="col-sm-3">                        
                                <div class="panel panel-default">
                                    <div class="panel-thumbnail"><img src="../img/<?=$oefening3 ?>.jpg" alt="test" class="img-responsive"/></div>
                                    <div class="panel-body">
                                        <?php echo "<p class='lead'>". $oefening3. "</p>";?>
                                    </div>
                                </div>                            
                            </div><!--/col-->
                        <?php endif; ?>    
                            
                        <?php if (!empty($oefening4)): ?>
                        <div class="col-sm-3">                        
                                <div class="panel panel-default">
                                    <div class="panel-thumbnail"><img src="../img/<?=$oefening4 ?>.jpg" alt="test" class="img-responsive"/></div>
                                    <div class="panel-body">
                                        <?php echo "<p class='lead'>". $oefening4. "</p>";?>                     
                                    </div>
                                </div>                            
                            </div><!--/col-->
                        <?php endif; ?>

						<input type="submit" value="submit" />
                        </form> 

                    </div><!--/main row-->
                </div><!--/main-->					
            </div>
        </div>
    </div> 
</div>

	<script src="../js/app.js"></script>
</body>
</html>