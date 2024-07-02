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
            Detail of your team: <br>
            <textarea name="team_details" rows="4" cols="50" required></textarea>
        </div>

        <div class="formdesign">
            Topic of project:<input type="text" name="bname" required></b>
        </div>

        <div class="formdesign">
            Skills/Language/Frameworks: <br>
            <input type="checkbox" name="skills[]" value="HTML"> HTML<br>
            <input type="checkbox" name="skills[]" value="CSS"> CSS<br>
            <input type="checkbox" name="skills[]" value="JavaScript"> JavaScript<br>
            <input type="checkbox" name="skills[]" value="Python"> Python<br>
            <input type="checkbox" name="skills[]" value="Java"> Java<br>
            <input type="checkbox" name="skills[]" value="C++"> C++<br>
            <input type="checkbox" name="skills[]" value="React"> React<br>
            <input type="checkbox" name="skills[]" value="Angular"> Angular<br>
            <input type="checkbox" name="skills[]" value="Node.js"> Node.js<br>
        </div>
       
        <div class="formdesign">
            Complaints/Feedbacks/Suggestions: <br>
            <textarea name="feedback" rows="4" cols="50"></textarea>
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
    $team_details = $_POST['team_details'];
    $topic=$_POST['bname'];
    $skills = $_POST['skills'];
    $feedback = $_POST['feedback'];

    // Serialize skills array into a JSON string
    $skills_json = json_encode($skills);

$sql= "INSERT INTO hackathoninfo(sname,email, phone,saddress,team_details,title,skills,feedback) 
VALUES('$name', '$email', '$phone', '$s_address', '$team_details' ,'$topic', '$skills_json', '$feedback')";
$result=mysqli_query($conn,$sql);
}
?>


