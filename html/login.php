<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../css/accounts.css">
  </head>
  <body>

    <div class="flex h-screen">
        <img src="../images/programming.png"  class="w-1/2 hidden lg:block">
        
        <div class="flex flex-col justify-center items-center w-full lg:w-1/2">
            <div>
                <div class="text-center text-xl font-bold lg:text-left">
                    <span >&#9650</span>
                    <span>Hack-A-Ton</span>
                </div>

                <div class="text-center text-3xl font-bold lg:text-left mt-5">
                    <h2>Hello,</h2>
                    <h2>Welcome Back Coders</h2>
                </div>

                <!-- Login up form  -->
                <form action="" class="mt-8 w-[80%] lg:w-96 mx-auto space-y-4">
                    <h4>Login to get access to your account.</h4>
                    
                    <input type="email" placeholder="Email"
                    class="w-full px-4 py-2 border">

                    <input type="password" placeholder="Password"
                    class="w-full px-4 py-2 border">


                    <!-- <div class="text-blue-600 cursor-pointer hover:text-blue-400">
                        Forget your password?
                    </div> -->

                    <div>
                        <div 
                        class="border rounded text-center cursor-pointer  py-2 border-2 border-[#424B54] bg-[#424B54] text-white p-1 w-full hover:bg-transparent hover:text-[#424B54] hover:font-bold "
                        >Login</div>
                    </div>

                    
                </form>
            </div>
            <div>
              <h4 class="text-center mt-2">OR</h4>
              <span class="mt-2 text-center text-[#424B54]"><a href="">create account?</a></span>
            </div>
        </div>
    </div>
  </body>
</html>
