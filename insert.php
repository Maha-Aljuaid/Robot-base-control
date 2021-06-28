<?php
    $hostname = "localhost";
    $username = "root";
    $password ="";
    $dbname = "db-basecontrol";

    //create connection
    $conn = new mysqli($hostname, $username, $password, $dbname);

    //check connection
    if ($conn->connect_error) {
      die("Connection failed: " .$conn->connect_error);
    }
    echo "Connected successfully";
    $sql = "SELECT * FROM `directions` WHERE 1";

     ?>
