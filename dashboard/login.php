<?php
       $conn = include_once '../src/config/database.php';
       session_start();
       if (isset($_SESSION['user'])) {
              header('Location: dashboard.php');
       }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | CBot</title>
    <link rel="shortcut icon" type="image/png" href="../../images/favicon.png" />
    <meta name="description" content="">
    <link rel="stylesheet" href="../../css/tailwind.css" >
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
              .body-bg {
                     background-color: #2a2323;
                     background-image: linear-gradient(315deg, #3b3131 50%, #2a2323 0%);
              }
    </style>
</head>
<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
       <main class="bg-white max-w-lg mx-auto p-2 md:p-10 my-10 rounded-lg shadow-2xl">
              <section>
                     <h3 class="font-bold text-2xl">Welcome to the dashboard</h3>
                     <p class="text-gray-600 pt-2 font-semibold">Please sign in to your account</p>
              </section>
              <section class="mt-10">
                     <form class="flex flex-col" method="POST" action="../src/includes/dashboard/login.inc.php">
                            <div class="mb-6 pt-3 rounded bg-gray-200">
                                   <input placeholder="Username" type="text" name="username" id="username" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-200 px-3 pb-3" 
                                   required autocomplete="off" oninvalid="this.setCustomValidity('Please enter your username!')" 
                                   oninput="this.setCustomValidity('')" />
                            </div>
                            <div class="mb-6 pt-3 rounded bg-gray-200">
                                   <input placeholder="Password" type="password" name="password" id="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-200 px-3 pb-3"
                                   required autocomplete="off" oninvalid="this.setCustomValidity('Please enter your password!')" 
                                   oninput="this.setCustomValidity('')">
                            </div>
                            <button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit"name=" submit" id="submit">Sign In</button>
                            <div class="text-black pt-5">Not where you want to be? <a href="../update.php" class="transition duration-100 ease-in-out text-purple-600 hover:text-purple-700"><b>Back to home</b></a>.</div>
                     </form>
              </section>
       </main>
</body>
</html>