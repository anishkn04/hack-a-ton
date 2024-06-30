<!-- Nishan Paudel -->
<!DOCTYPE html>
<html>
<head>
    <title>SELLER INFORMATION</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <h1>SELLER INFORMATION</h1>
    <form method= "POST" action="<?php $_SERVER['PHP_SELF'];?>">
        <div class="formdesign">
            Name: <input type="text" name="fname" required></b>
        </div>

        <div class="formdesign">
            Email: <input type="email" name="femail" required></b>
        </div>

        <div class="formdesign">
            Phone: <input type="phone" name="fphone" required></b>
        </div>

        <div class="formdesign">
            Address: <input type="text" name="faddress" required></b>
        </div>

        <div class="formdesign">
            Name of book: <input type="text" name="bname" required></b>
        </div>

        <div class="formdesign">
            Number of book: <input type="text" name="bnumber" required></b>
        </div>
       
        <div class="formdesign">
        Selling price: <input type="text" name="sprice" required></b>
        </div>

        <div class="formdesign">
            Genre: <input type="text" name="fgenre" required></b>
        </div>

        <div class="formdesign">
            Date of purchase: <input type="date" name="fdate" required></b>
        </div>

        <div class="formdesign">
            Delivery mode: <input type="text" name="fmode" required></b>
        </div>

        <input class="but" type="submit" value="Submit" name="submit">

    </form>
</body>
</html>
<?php
include "connect.php";
if(isset($_POST['submit'])){
    $seller_name= $_POST['fname'];
    $email=$_POST['femail'];
    $phone=$_POST['fphone'];
    $s_address=$_POST['faddress'];
    $nameofbook=$_POST['bname'];
    $numberofbook=$_POST['bnumber'];
    $sellingprice=$_POST['sprice'];
    $genre=$_POST['fgenre'];
    $dateofpurchase=$_POST['fdate'];
    $deliverymode=$_POST['fmode'];

$sql= "INSERT INTO sellerinfo(sellername,email, phone,saddress,nameofbook,numberofbook, sellingprice,
genre, dateofpurchase, deliverymode) 
VALUES('$seller_name', '$email', '$phone', '$s_address', '$nameofbook', '$numberofbook','$sellingprice',
'$genre','$dateofpurchase','$deliverymode')";
$result=mysqli_query($conn,$sql);
}
?>


