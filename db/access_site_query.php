<?php
    $servername = "eu-cdbr-west-03.cleardb.net";
    $username = "b26340cf38f897";
    $password = "1bb944b79fba1a8";
    $db = 'heroku_5af6573f25bac00';

    $sql = "UPDATE results_table SET AccessSiteCount = AccessSiteCount + 1 WHERE id = 1";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    print_r($_COOKIE);

    // Check connection
    if ($conn->connect_error) {
        echo "no connection";
        die("Connection failed: " . $conn->connect_error);
    }
    
    if (!isset($_COOKIE["access_site_restrict"]))
    {
        $retval = $conn->query($sql);
        echo "Updated access site data successfully\n";
        setcookie("access_site_restrict", "access_site_restrict",  time() + 2 * 24 * 60 * 60, '/');
        if(! $retval ) {
            die('Could not update data: ');
        }
    }
    if (isset($_COOKIE["access_site_restrict"]))
    {
        echo 'sign in processed';
    }
    //mysql_close($conn);
?>