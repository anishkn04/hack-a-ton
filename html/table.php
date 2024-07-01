<!-- this is for me to do some testing nishan paudel -- >
<?php
include "connect.php";
$sql= "CREATE TABLE IF NOT EXISTS hackathoninfo(sname VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL, phone VARCHAR(20) NOT NULL,saddress VARCHAR(20) NOT NULL,title VARCHAR(255), registeredat DATETIME DEFAULT CURRENT_TIMESTAMP())";
$result = mysqli_query($conn,$sql);
?>

