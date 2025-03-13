<?php
    $server_name = "localhost";
    $database = "ipt2_midterm_project_group7";
    $username = "root";
    $password = "";

    $conn = new mysqli($server_name, $username, $password, $database);

    if($conn->connect_error){
        die("Database connection failed. " . $conn->connect_error);

    }
    else{
        echo "Databasse connection succesful.";
    }

?>
