<?php
    $servername = "eu-cdbr-west-03.cleardb.net";
    $username = "b26340cf38f897";
    $password = "1bb944b79fba1a8";
    $db = 'heroku_5af6573f25bac00';

    $sql = "UPDATE results_table SET SignInCount = SignInCount + 1 WHERE id = 1";

    setcookie("test", "test",  time() + 2 * 24 * 60 * 60);

    if (isset($_COOKIE["test"]))
    {
        echo "sign in processed";
    }
    
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);
    
    // Check connection
    if ($conn->connect_error) {
        echo "no connection";
        die("Connection failed: " . $conn->connect_error);
    }

    //mysql_select_db('results_table');
    $retval = $conn->query($sql);
    if(! $retval ) {
        die('Could not update data: ');
    }
    echo "Updated sign in site data successfully\n";
    //mysql_close($conn);  
?>