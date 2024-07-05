<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/accounts.css">
    <title>Signup</title>
</head>
<body>
<div class="flex h-screen">
        <img src="../images/lightbulb.jpg"  class="w-1/2 hidden lg:block">
        
        <div class="flex flex-col justify-center items-center w-full lg:w-1/2">
            <div>
                <div class="text-center text-xl font-bold lg:text-left">
                    <span >&#9650</span>
                    <span>Hack-A-Ton</span>
                </div>

                <div class="text-center text-3xl font-bold lg:text-left mt-5">
                    <h2>Hello,</h2>
                    <h2>Welcome Coders</h2>
                </div>

                <!-- sign up form  -->
                <form id="signupForm" action="<?php $_SERVER['PHP_SELF']?>" method="post"
                    class="mt-8 w-[80%] lg:w-96 mx-auto space-y-4">
                    <h4>Sign Up to manage your account</h4>
                    
                    <input id="memname" name="mname" type="text" placeholder="Name"
                    class="w-full px-4 py-2 border">

                    <input id="mememail" name="memail" type="email" placeholder="Email"
                    class="w-full px-4 py-2 border">

                    <input id="mempassword" name="mpassword" type="password" placeholder="Password"
                    class="w-full px-4 py-2 border">

                    <input id="mcpassword" name="mcpassword" type="password" placeholder="Confirm Password"
                    class="w-full px-4 py-2 border">

                    <input id="mgroupname" name="mgroupname" type="text" placeholder="GoupName"
                    class="w-full px-4 py-2 border">

                    <div>
                        <button type="submit" id="submit" class=" rounded text-center  py-2 border-2 border-[#424B54] bg-[#424B54] text-white p-1 w-full hover:bg-transparent hover:text-[#424B54] cursor-pointer hover:font-bold" name="submit" >Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/accounts.js"></script>
</body>
</html>





<?php
    include './connect.php';

    if (isset($_POST['submit'])){

        $name = filter_input(INPUT_POST, "mname", FILTER_SANITIZE_SPECIAL_CHARS);

        $email = filter_input(INPUT_POST, "memail", FILTER_SANITIZE_SPECIAL_CHARS);

        $password = $_POST['mpassword'];

        $cpassword = $_POST['mcpassword'];

        $groupname = filter_input(INPUT_POST, "mgroupname",FILTER_SANITIZE_SPECIAL_CHARS);


        $sql = $connection->prepare ("SELECT * FROM signup where m_email = ?");
        $sql -> bind_param("s",$email);
        $sql->execute();

        $result = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        if(count($result) > 0){
            echo "username already exists";
        }
        else 
        {
            if($password == $cpassword) {
                $hash = password_hash($password, PASSWORD_DEFAULT);

                $inserData = $connection->prepare ("INSERT INTO signup (m_name, m_email, m_password, m_groupname, date_registered) VALUES 
                ( ?, ?, ?, ?, ?)");


                $currentTimestamp = date('Y-m-d H:i:s'); // Get the current timestamp in the format 'YYYY-MM-DD HH:MM:SS'
                $inserData->bind_param("sssss", $name, $email, $hash, $groupname, $currentTimestamp);
                $inserData->execute();


                if (!$inserData->execute()) {
                    die('Execute failed: ' . htmlspecialchars($inserData->error));
                }
    
                echo "You are registered";
            } else {
                echo "Match the password in both fields";
            }
        }

    }

    $sql->close();
    $connection->close();
?>