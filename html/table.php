<!-- this is for me to do some testing nishan paudel -- >
<?php
include "connect.php";
$sql= "CREATE TABLE IF NOT EXISTS sellerinfo(sellername VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL, phone VARCHAR(20) NOT NULL,saddress VARCHAR(20) NOT NULL,nameofbook VARCHAR(255),
numberofbook INT NOT NULL, sellingprice INT NOT NULL,
genre VARCHAR(20), dateofpurchase DATETIME, deliverymode VARCHAR(20), registeredat DATETIME DEFAULT CURRENT_TIMESTAMP())";
$result = mysqli_query($conn,$sql);
?>

