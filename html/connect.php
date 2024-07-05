<?php
$env = parse_ini_file('./.env');
$servername = $env["SERVER"];
$username = $env["USERNAME"];
$pass = $env["PASS"];
$dbname = $env["DBNAME"];


$conn=mysqli_connect($servername,$username,$pass,$dbname);

$sql    = "CREATE TABLE IF NOT EXISTS hackathoninfo(id INT AUTO_INCREMENT PRIMARY KEY,sname VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL, phone VARCHAR(20) NOT NULL,saddress VARCHAR(20) NOT NULL,team_details TEXT,title VARCHAR(255),start_dates DATE, skills TEXT,skils TEXT,feedback TEXT,registeredat DATETIME DEFAULT CURRENT_TIMESTAMP())";
$result = mysqli_query($conn, $sql);
