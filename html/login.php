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
    <div class="flex justify-center items-center h-screen bg-[#424B54]">
      <div class="w-96 p-6 shadow-lg bg-white rounded-md">
        <h1 class="text-3xl text-center font-semibold"><i class="fa-solid fa-user"></i> Login</h1>

        <hr class="mt-3">


        <div class="mt-3">
          <label for="username" class="block text-base mb-2">Username</label>
          <input type="text" id="username" class="border w-full text-base px-2 py-1 focus:outline-none focus:right-0 focus:border-gray-600 rounded" placeholder="Enter Username">
        </div>

        <div class="mt-3">
          <label for="password" class="block text-base mb-2">Password</label>
          <input type="text" id="password" class="border w-full text-base px-2 py-1 focus:outline-none focus:right-0 focus:border-gray-600 rounded" placeholder="Enter Password">
        </div>


        <div class="mt-5">
          <button type="submit" class="border-2 border-[#424B54] bg-[#424B54] text-white p-1 w-full rounded hover:bg-transparent hover:text-[#424B54] hover:font-bold ">Register</button>
        </div>
      </div>
    </div>
  </body>
</html>
