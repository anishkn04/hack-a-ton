<!-- this is for me to do some testing nishan paudel -->
<?php
include "connect.php";
$sql= "CREATE TABLE IF NOT EXISTS demoinfo(lname VARCHAR(255) NOT NULL,
lemail VARCHAR(255) NOT NULL)";
$result = mysqli_query($conn,$sql);
?>