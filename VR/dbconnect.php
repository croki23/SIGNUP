<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "croki";
    $conn = new mysqli ($servername, $username, $password);
    if ($conn-> connect_error)
    {
        die("Connection Failed" .$conn->connect_error);
    }
    echo "";

?>