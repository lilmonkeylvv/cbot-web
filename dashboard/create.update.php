<?php session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: login.php');
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/tailwind.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
    <title>Dashboard | CBot</title>
    <link rel="shortcut icon" type="image/png" href="../../images/favicon.png" />
</head>
<style>
       body {
              --tw-bg-opacity: 1;
              background-color: rgba(31, 41, 55, var(--tw-bg-opacity));
       }
</style>
       <body>
       <div class="flex flex-col md:flex-row">

              <div class="bg-gray-800 shadow-x1 h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48">
                     <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                            <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
                                   <li class="mr-3 flex-1">
                                          <a href="dashboard.php" class="block py-1 md:py-3 pl-1 transition duration-200 ease-in-out align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-600">
                                                 <i class="fas fa-home pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Dashboard home</span>
                                          </a>
                                   </li>
                                   <li class="mr-3 flex-1">
                                          <a href="updates.php" class="block py-1 md:py-3 pl-1 transition duration-200 ease-in-out align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-600">
                                                 <i class="fas fa-tasks pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-white block md:inline-block">Updates</span>
                                          </a>
                                   </li>
                                   <li class="mr-3 flex-1">
                                          <a href="users.php" class="block py-1 md:py-3 pl-1 transition duration-200 ease-in-out align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-600">
                                                 <i class="fas fa-user-friends pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-white block md:inline-block">Users</span>
                                          </a>
                                   </li>
                            </ul>
                     </div>
              </div>

              <main class="bg-gray-300 max-w-lg mx-auto p-16 md:p-16 my-10 rounded-lg shadow-2xl w-1/2" style="height: fit-content;margin: auto">
                     <section>
                            <h3 class="font-bold text-2xl text-center">Push an update</h3>
                     </section>
                     <section class="mt-10">
                            <form class="flex flex-col" method="POST" action="../src/includes/updates/create.inc.php">
                                   <div class="mb-6 pt-3 rounded bg-white">
                                          <textarea placeholder="Enter update description here." type="text" name="update-desc" id="update-desc" class="bg-white rounded w-full text-gray-700 focus:outline-none transition duration-200 px-3 pb-3" required autofocus oninvalid="this.setCustomValidity('Please enter a message, it cannot be empty!')" oninput="this.setCustomValidity('')"></textarea>
                                   </div>
                                   <button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit" name="submit" id="submit">Submit</button>
                            </form>
                     </section>
              </main>
       </div>
              <script>function toggleDD(myDropMenu) {
                     document.getElementById(myDropMenu).classList.toggle("invisible");
              }</script>
    </body>
</html> 