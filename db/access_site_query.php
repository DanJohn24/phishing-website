<?php
    $servername = "eu-cdbr-west-03.cleardb.net";
    $username = "b26340cf38f897";
    $password = "1bb944b79fba1a8";
    $db = 'heroku_5af6573f25bac00';

    if (!isset($_COOKIE["starter_cookie"]))
    {
        die("resource denied");  
    }

    $id_gen = bin2hex(openssl_random_pseudo_bytes(16));

    $SQL_statement = "INSERT INTO `results_table` (`id`,`AccessSiteCount`) VALUES ('$id_gen', 1)";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die();
    }
    
    if (!isset($_COOKIE["access_site_restrict"]))
    {
        $SQL_error_check = $conn->query($SQL_statement);
        setcookie("access_site_restrict", $id_gen,  time() + 2 * 24 * 60 * 60, '/');
        if(! $SQL_error_check ) {
            die("error has occured");
        }
    }
?>