<?php
    $servername = "eu-cdbr-west-03.cleardb.net";
    $username = "b26340cf38f897";
    $password = "39651a53";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, );
    
    // Check connection
    if ($conn->connect_error) {
        echo "no connection";
        die("Connection failed: " . $conn->connect_error);
    }
    $data = $conn->query('SHOW databases');
    echo "Connected successfully";


    //test
    $test_query = $conn->query("SHOW databases;");
    $result = mysqli_query($link, $test_query);

    $tblCnt = 0;
    while($tbl = mysqli_fetch_array($result)) {
         $tblCnt++;
         echo $tbl[0]."<br />\n";
    }

?>