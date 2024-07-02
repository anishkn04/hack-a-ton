<!-- this is for me to do some testing nishan paudel -->
 <!DOCTYPE html>
<html>
<head>
    <title>Hackathon Form</title>
   
</head>
<body>
    <h1>HACKATHON FORM</h1>
    <form method= "POST" action="<?php $_SERVER['PHP_SELF'];?>">
        <div class="formdesign">
            Name: <input type="text" name="lname" required></b>
        </div>

        <div class="formdesign">
            Email: <input type="email" name="lemail" required></b>
        </div>

        <input class="but1" type="submit" value="Submit" name="submit">

    </form>
</body>
</html>
<?php
include "connect.php";
if(isset($_POST['submit'])){
    $lname= $_POST['lname'];
    $lemail=$_POST['lemail'];

$sql= "INSERT INTO demoinfo(lname,lemail) 
VALUES('$lname', '$lemail')";
$result=mysqli_query($conn,$sql);
}
?>
