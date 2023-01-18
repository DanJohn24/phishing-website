<?php
    $servername = "eu-cdbr-west-03.cleardb.net";
    $username = "b26340cf38f897";
    $password = "1bb944b79fba1a8";
    $db = 'heroku_5af6573f25bac00';

    $initial_sql_stmt = "UPDATE results_table SET SignInCount = SignInCount + 1 WHERE id = 1";
    $sql_minus_stmt = "UPDATE results_table SET AccessSiteCount = AccessSiteCount - 1 WHERE id = 1";

    setcookie("access_site_restrict", "access_site_restrict",  time() + 2 * 24 * 60 * 60, '/');

    if (!isset($_COOKIE["starter_cookie"]))
    {
        die("resource denied");  
    }

    if (isset($_COOKIE["further_execution_restrict"]))
    {
        header('Location:redirect_site.html');
        die();  
    }
        
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);
    
    // Check connection
    if ($conn->connect_error) {
        die();
    }

    if (!isset($_COOKIE["further_execution_restrict"]))
    {
        $retval_one = $conn->query($initial_sql_stmt);
        if(! $retval_one ) {
            die();
        }
        $retval_two = $conn->query($sql_minus_stmt);
        if(! $retval_two ) {
            die();
        }
    }

    setcookie("further_execution_restrict", "further_execution_restrict",  time() + 2 * 24 * 60 * 60, '/');
?>
<html>
    <body>
    <div id="container">
        <div id="header">
            <h2>You entered sign-in data into a simulated Phishing test</h2>
            <h3>Here are some tips to help you stay safer in the future</h3>
        </div>
        <div id="row">
            <div class="text_section">
                <h1>Tip: #1</h1>
                <h2></h2>
                <p> </p>
            </div>
            <div class="text_section">
                <h1>Tip: #2</h1>
                <h2> </h2>
                <p> </p>
            </div>
            <div class="text_section">
                <h1>Tip: #3</h1>
                <h2> </h2>
                <p> </p>
            </div>
        </div>
    </body>

    <style>
    #container{
        text-align:center
    }
    </style>
</html>
