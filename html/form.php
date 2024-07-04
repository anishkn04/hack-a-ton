<!-- Nishan Paudel - Test -->
<!DOCTYPE html>
<html>

<head>
    <title>Hackathon Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="../css/form.css">
</head>

<body>
    <main>
        <h3>HACKATHON FORM</h3>

        <?php
        session_start();
        include "connect.php";

        if (isset($_SESSION['user_name'])) {
            $username = $_SESSION['user_name'];

            // Fetch data from demoinfo table
            $demo_sql    = "SELECT lname, lemail FROM demoinfo WHERE lname='$username' LIMIT 1";
            $demo_result = mysqli_query($conn, $demo_sql);
            $demo_data   = mysqli_fetch_assoc($demo_result);

            $demo_name  = $demo_data['lname'];
            $demo_email = $demo_data['lemail'];
        }
        ?>

        <form method="POST" id="hackathonForm" action="<?php $_SERVER['PHP_SELF']; ?>">

            <div class="formdesign">
                Name: <input type="text" name="fname" value="<?php echo $demo_name; ?>" readonly>
            </div>

            <div class="formdesign">
                Email: <input type="email" name="femail" value="<?php echo $demo_email; ?>" readonly>
            </div>

            <div class="formdesign">
                Phone: <input type="tel" pattern="9[0-9]{9}" name="fphone" required></b>
            </div>

            <div class="formdesign">
                Address: <input type="text" name="faddress" required></b>
            </div>

            <div class="formdesign">
                Topic of project:<input type="text" name="bname" required></b>
            </div>

            <div class="formdesign">
                Description of your project: <br>
                <textarea name="team_details" rows="4" cols="50" required></textarea>
            </div>

            <div class="formdesign">
                Preferred start date for Hack-A-Ton: <input type="date" name="start_dates" required>
            </div>

            Skills/Language/Frameworks:
            <div class="formdesign boxes">
                <label for="learnt-html"><input type="checkbox" id="learnt-html" name="skills[]" value="HTML">
                    HTML</label>
                <label for="learnt-css"><input type="checkbox" id="learnt-css" name="skills[]" value="CSS"> CSS</label>
                <label for="learnt-js"><input type="checkbox" id="learnt-js" name="skills[]" value="JavaScript">
                    JavaScript</label>
                <label for="learnt-py"><input type="checkbox" id="learnt-py" name="skills[]" value="Python">
                    Python</label>
                <label for="learnt-java"><input type="checkbox" id="learnt-java" name="skills[]" value="Java">
                    Java</label>
                <label for="learnt-cpp"><input type="checkbox" id="learnt-cpp" name="skills[]" value="C++"> C++</label>
                <label for="learnt-react"><input type="checkbox" id="learnt-react" name="skills[]" value="React">
                    React</label>
                <label for="learnt-angular"><input type="checkbox" id="learnt-angular" name="skills[]" value="Angular">
                    Angular</label>
                <label for="learnt-node"><input type="checkbox" id="learnt-node" name="skills[]" value="Node.js">
                    Node.js</label>
                <label for="learnt-go"><input type="checkbox" id="learnt-go" name="skills[]" value="Go"> Go</label>
                <label for="learnt-other"><input type="checkbox" id="learnt-other" name="skils[]" value="Other">
                    Other<br></label>
            </div>

            Skills/Language/Frameworks that you want to learn: <br>
            <div class="formdesign boxes">
                <label for="to-learn-html"><input type="checkbox" id="to-learn-html" name="skils[]" value="HTML">
                    HTML<br></label>
                <label for="to-learn-css"><input type="checkbox" id="to-learn-css" name="skils[]" value="CSS">
                    CSS<br></label>
                <label for="to-learn-js"><input type="checkbox" id="to-learn-js" name="skils[]" value="JavaScript">
                    JavaScript<br></label>
                <label for="to-learn-py"><input type="checkbox" id="to-learn-py" name="skils[]" value="Python">
                    Python<br></label>
                <label for="to-learn-java"><input type="checkbox" id="to-learn-java" name="skils[]" value="Java">
                    Java<br></label>
                <label for="to-learn-cpp"><input type="checkbox" id="to-learn-cpp" name="skils[]" value="C++">
                    C++<br></label>
                <label for="to-learn-react"><input type="checkbox" id="to-learn-react" name="skils[]" value="React">
                    React<br></label>
                <label for="to-learn-angular"><input type="checkbox" id="to-learn-angular" name="skils[]"
                        value="Angular"> Angular<br></label>
                <label for="to-learn-node"><input type="checkbox" id="to-learn-node" name="skils[]" value="Node.js">
                    Node.js<br></label>
                <label for="to-learn-go"><input type="checkbox" id="to-learn-go" name="skils[]" value="Go">
                    Go<br></label>
                <label for="to-learn-other"><input type="checkbox" id="to-learn-other" name="skils[]" value="Other">
                    Other<br></label>
            </div>

            <div class="formdesign">
                Complaints/Feedbacks/Suggestions: <br>
                <textarea name="feedback" rows="4" cols="50"></textarea>
            </div>

            <div class="formdesign">
                <input type="checkbox" id="agreeTerms" name="agreeTerms">
                I agree to the hackathon terms and marking policy <span class="material-symbols-outlined" id="dropper">
                    arrow_drop_down
                </span>
                <div id="terms" class="hidden">
                    <!-- This is just a place holder! -->
                    1. Every one here will be assigned a task which must be completed within the given time frame.

                    2. If you think the task is too easy or too hard, you may swap with any other person who feels the
                    same.

                    3. Any assistance you require will be provided by @anishkn04 , thus you may ping @anishkn04 any
                    where you prefer. (Will be available when online and before 10:00PM every day.)

                    4. There will be a single repo for these set of tasks given by @anishkn04, where you will create a
                    new branch of your name and push any tasks you do there. (Ping @anishkn04 for elaboration if needed)

                    5. Prep-A-Ton will be held for a week, from June 29, 2024 to July 6, 2024, but all tasks are
                    expected to be completed within July 4, 2024 so that there will be enough time to host
                    the complete site.

                    6. The completion of given set of tasks is mandatory, and you will be fined (Rs. 40) if
                    not able to do that within the time frame.

                    7. Each task assigned may have a expected completion date.

                    8. Everyone is expected to fill up the form for the actual Hack-A-Ton (And guess what?
                    The site will have been created by none other than us!!!)

                    9. The initial set of tasks will be announced within June 29, 2024, so, oil up bby
                    gurl!

                    10. To discuss or for elaboration on your assigned task, continue in the
                    announcement's thread (I will create a thread for each task, you may state your
                    queries there)!
                </div>
                <br><span id="termsError" style="color:red;"></span>
            </div>

            <input class="but" type="submit" value="Submit" name="submit">

        </form>

    </main>
    <script src="../js/form.js"></script>
</body>

</html>
<?php
include "connect.php";
if (isset($_POST['submit'])) {
    $name         = $_POST['fname'];
    $email        = $_POST['femail'];
    $phone        = $_POST['fphone'];
    $s_address    = $_POST['faddress'];
    $team_details = $_POST['team_details'];
    $topic        = $_POST['bname'];
    $start_dates  = $_POST['start_dates'];
    $skills       = $_POST['skills'];
    $skils        = $_POST['skils'];
    $feedback     = $_POST['feedback'];

    // Serialize skills array into a JSON string
    $skills_json = json_encode($skills);
    $skils_json  = json_encode($skils);

    $sql    = "INSERT INTO hackathoninfo(sname,email, phone,saddress,team_details,title,start_dates,skills,skils,feedback) 
VALUES('$name', '$email', '$phone', '$s_address', '$team_details' ,'$topic', '$start_dates','$skills_json','$skils_json', '$feedback')";
    $result = mysqli_query($conn, $sql);
}
?>