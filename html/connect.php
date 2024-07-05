<?php

$env = parse_ini_file('./.env');

$servername = $env["SERVER"];
$username = $env["USERNAME"];
$pass = $env["PASSWORD"];
$dbname = $env["DBNAME"];

try {

    $connection = new mysqli($servername, $username, $pass, $dbname);


    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    } else {
        echo "Database connected successfully<br>";
    }


    $sqlCreateTable = "CREATE TABLE IF NOT EXISTS signup (
        m_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        m_name VARCHAR(50) NOT NULL,
        m_email VARCHAR(60) NOT NULL,
        m_password VARCHAR(256),
        m_groupname VARCHAR(20),
        date_registered TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    )";

   
    if ($connection->query($sqlCreateTable) === TRUE) {
        echo "Table 'signup' created successfully";
    } else {
        echo "Error creating table: " . $connection->error;
    }

} catch (Exception $e) {
    echo "<script> alert('" . $e->getMessage() . "') </script>";
} 
