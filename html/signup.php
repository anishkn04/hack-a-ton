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
                <form action="" class="mt-8 w-[80%] lg:w-96 mx-auto space-y-4">
                    <h4>SignUp to manage your account</h4>
                    
                    <input type="text" placeholder="Name"
                    class="w-full px-4 py-2 border">

                    <input type="email" placeholder="Email"
                    class="w-full px-4 py-2 border">

                    <input type="password" placeholder="Password"
                    class="w-full px-4 py-2 border">

                    <input type="text" placeholder="GoupName"
                    class="w-full px-4 py-2 border">

                    <!-- <div class="text-blue-600 cursor-pointer hover:text-blue-400">
                        Forget your password?
                    </div> -->

                    <div>
                        <div 
                        class="border rounded text-center text-white py-2 border-2 border-[#424B54] bg-[#424B54] text-white p-1 w-full rounded hover:bg-transparent hover:text-[#424B54] hover:font-bold "
                        >SignUp</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>