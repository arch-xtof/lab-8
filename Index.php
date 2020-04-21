<?php

    $servername = "anysql.itcollege.ee";
    $username = "WT8";
    $password = "CJuPlun24D";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

?>