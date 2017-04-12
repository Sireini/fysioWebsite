   <?php
        $servername = "localhost";
        $username = "sylvan1q";
        $password = "C00lermaster.";
        $database = "sylvan1q_test";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
    ?>