<?php
    //$servername = "eu-cdbr-west-03.cleardb.net";
    $username = "b26340cf38f897";
    $password = "39651a53";
    
    // Create connection
    $conn = new PDO('mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_5af6573f25bac00', $username, $password);
    //$conn = new mysqli($servername, $username, $password, );
    
    // Check connection
    if ($conn->connect_error) {
        echo "no connection";
        die("Connection failed: " . $conn->connect_error);
    }
    $data = $conn->query('SHOW databases');
    echo "Connected successfully";

?>