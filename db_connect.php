<?php
    // connect to the database
    $db = mysqli_connect("localhost", "root", "", "badas_db");

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    //echo "Connected successfully";
?>