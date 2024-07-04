<?php
$servername="localhost:3306";
$username="ODBC";
$password="";
$dbname="demo";
$conn=mysqli_connect($servername,$username,$password,$dbname);

$sql    = "CREATE TABLE IF NOT EXISTS hackathoninfo(id INT AUTO_INCREMENT PRIMARY KEY,sname VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL, phone VARCHAR(20) NOT NULL,saddress VARCHAR(20) NOT NULL,team_details TEXT,title VARCHAR(255),start_dates DATE, skills TEXT,skils TEXT,feedback TEXT,registeredat DATETIME DEFAULT CURRENT_TIMESTAMP())";
$result = mysqli_query($conn, $sql);
?>