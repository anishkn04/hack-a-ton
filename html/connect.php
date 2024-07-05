<?php

// Parse the .env file to get environment variables
$env = parse_ini_file('./.env');
$servername = $env["SERVER"];
$username = $env["USERNAME"];
$pass = $env["PASSWORD"];
$dbname = $env["DBNAME"];

try {
    // Establish database connection
    $connection = new mysqli($servername, $username, $pass, $dbname);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    } else {
        echo "Database connected successfully<br>";
    }

    // SQL query to create 'signup' table
    $sqlCreateSignupTable = "CREATE TABLE IF NOT EXISTS signup (
        m_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        m_name VARCHAR(50) NOT NULL,
        m_email VARCHAR(60) NOT NULL,
        m_password VARCHAR(256),
        m_groupname VARCHAR(20),
        date_registered TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    )";

    // Execute query to create 'signup' table
    if ($connection->query($sqlCreateSignupTable) === TRUE) {
        echo "Table 'signup' created successfully<br>";
    } else {
        echo "Error creating table 'signup': " . $connection->error . "<br>";
    }

    // SQL query to create 'hackathoninfo' table
    $sqlCreateHackathonTable = "CREATE TABLE IF NOT EXISTS hackathoninfo (
        id INT AUTO_INCREMENT PRIMARY KEY,
        sname VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        phone VARCHAR(20) NOT NULL,
        saddress VARCHAR(20) NOT NULL,
        team_details TEXT,
        title VARCHAR(255),
        start_dates DATE,
        skills TEXT,
        skils TEXT,
        feedback TEXT,
        registeredat DATETIME DEFAULT CURRENT_TIMESTAMP
    )";

    // Execute query to create 'hackathoninfo' table
    if ($connection->query($sqlCreateHackathonTable) === TRUE) {
        echo "Table 'hackathoninfo' created successfully<br>";
    } else {
        echo "Error creating table 'hackathoninfo': " . $connection->error . "<br>";
    }

} catch (Exception $e) {
    echo "<script> alert('" . $e->getMessage() . "') </script>";
}



