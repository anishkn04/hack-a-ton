<!-- Nishan Paudel -->
<!DOCTYPE html>
<html>
<head>
    <title>Hackathon Form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <h1>HACKATHON FORM</h1>
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
            Topic of project:<input type="text" name="bname" required></b>
        </div>

       

        <input class="but" type="submit" value="Submit" name="submit">

    </form>
</body>
</html>
<?php
include "connect.php";
if(isset($_POST['submit'])){
    $name= $_POST['fname'];
    $email=$_POST['femail'];
    $phone=$_POST['fphone'];
    $s_address=$_POST['faddress'];
    $topic=$_POST['bname'];

$sql= "INSERT INTO hackathoninfo(sname,email, phone,saddress,title) 
VALUES('$name', '$email', '$phone', '$s_address', '$topic')";
$result=mysqli_query($conn,$sql);
}
?>


