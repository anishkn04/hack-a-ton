<!--nishan paudel -- >
<?php
include "connect.php";
$sql= "CREATE TABLE IF NOT EXISTS hackathoninfo(id INT AUTO_INCREMENT PRIMARY KEY,sname VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL, phone VARCHAR(20) NOT NULL,saddress VARCHAR(20) NOT NULL,team_details TEXT,title VARCHAR(255), skills TEXT,feedback TEXT,registeredat DATETIME DEFAULT CURRENT_TIMESTAMP())";
$result = mysqli_query($conn,$sql);
?>

