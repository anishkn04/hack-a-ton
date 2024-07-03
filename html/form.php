<!-- Nishan Paudel -->
<!DOCTYPE html>
<html>
<head>
    <title>Hackathon Form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <header>
        <h1>PREP-A-TON</h1>
    </header>
    <main>
    <h3>HACKATHON FORM</h3>

    <?php
        session_start();
        include "connect.php";

        if (isset($_SESSION['user_name'])) {
            $username = $_SESSION['user_name'];

            // Fetch data from demoinfo table
            $demo_sql = "SELECT lname, lemail FROM demoinfo WHERE lname='$username' LIMIT 1";
            $demo_result = mysqli_query($conn, $demo_sql);
            $demo_data = mysqli_fetch_assoc($demo_result);

            $demo_name = $demo_data['lname'];
            $demo_email = $demo_data['lemail'];
        }
    ?>

    <form method= "POST" action="<?php $_SERVER['PHP_SELF'];?>">

        <div class="formdesign">
                Name: <input type="text" name="fname" value="<?php echo $demo_name; ?>" readonly>
        </div>

        <div class="formdesign">
                Email: <input type="email" name="femail" value="<?php echo $demo_email; ?>" readonly>
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
                Preferred start date for Hack-A-Ton: <input type="date" name="start_dates" required>
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
             Preferred Skills/Language/Frameworks: <br>
            <input type="checkbox" name="skils[]" value="HTML"> HTML<br>
            <input type="checkbox" name="skils[]" value="CSS"> CSS<br>
            <input type="checkbox" name="skils[]" value="JavaScript"> JavaScript<br>
            <input type="checkbox" name="skils[]" value="Python"> Python<br>
            <input type="checkbox" name="skils[]" value="Java"> Java<br>
            <input type="checkbox" name="skils[]" value="C++"> C++<br>
            <input type="checkbox" name="skils[]" value="React"> React<br>
            <input type="checkbox" name="skils[]" value="Angular"> Angular<br>
            <input type="checkbox" name="skils[]" value="Node.js"> Node.js<br>
        </div>      
       
        <div class="formdesign">
            Complaints/Feedbacks/Suggestions: <br>
            <textarea name="feedback" rows="4" cols="50"></textarea>
        </div>

        <input class="but" type="submit" value="Submit" name="submit">

    </form>

</main>
<script src="form.js"></script>
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
    $start_dates=$_POST['start_dates'];
    $skills = $_POST['skills'];
    $skils=$_POST['skils'];
    $feedback = $_POST['feedback'];

    // Serialize skills array into a JSON string
    $skills_json = json_encode($skills);
    $skils_json=json_encode($skils);

$sql= "INSERT INTO hackathoninfo(sname,email, phone,saddress,team_details,title,start_dates,skills,skils,feedback) 
VALUES('$name', '$email', '$phone', '$s_address', '$team_details' ,'$topic', '$start_dates','$skills_json','$skils_json', '$feedback')";
$result=mysqli_query($conn,$sql);
}
?>


