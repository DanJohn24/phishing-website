<?php
    $servername = "eu-cdbr-west-03.cleardb.net";
    $username = "b26340cf38f897";
    $password = "1bb944b79fba1a8";
    $db = 'heroku_5af6573f25bac00';

    $sql = "UPDATE results_table SET AccessSiteCount = AccessSiteCount + 1 WHERE id = 1";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);
    
    // Check connection
    if ($conn->connect_error) {
        echo "no connection";
        die("Connection failed: " . $conn->connect_error);
    }
    
    if (isset($_COOKIE)) {
        echo 'sign in processed';
    }
    else if (!isset($_COOKIE["test"]))
    {
        $retval = $conn->query($sql);
        echo "Updated access site data successfully\n";
        if(! $retval ) {
            die('Could not update data: ');
        }
    }
    
    
    
    
    //mysql_close($conn);
?>