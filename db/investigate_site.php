<?php
    $servername = "eu-cdbr-west-03.cleardb.net";
    $username = "b26340cf38f897";
    $password = "1bb944b79fba1a8";
    $db = 'heroku_5af6573f25bac00';

    $sql = "UPDATE results_table SET InvestigateSiteCount = InvestigateSiteCount + 1 WHERE id = 1";

    setcookie("access_site_restrict", "access_site_restrict",  time() + 2 * 24 * 60 * 60, '/');

    if (isset($_COOKIE["test"]))
    {
        echo "investigate site processed";
    }
    print_r($_COOKIE);

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);
    
    // Check connection
    if ($conn->connect_error) {
        echo "no connection";
        die("Connection failed: " . $conn->connect_error);
    }

    if (!isset($_COOKIE["further_execution_restrict"]))
    {
        $retval = $conn->query($sql);
        echo "Updated access site data successfully\n";
        if(! $retval ) {
            die('Could not update data: ');
        }
    }
    if (isset($_COOKIE["further_execution_restrict"]))
    {
        echo 'sign in processed';
    }

    echo "Updated sign in site data successfully\n";
    setcookie("further_execution_restrict", "further_execution_restrict",  time() + 2 * 24 * 60 * 60, '/');
    //mysql_close($conn);  
?>