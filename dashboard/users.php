<?php
       $conn = include_once '../src/config/database.php';
       session_start();
       if (!isset($_SESSION['user'])) {
              header('Location: login.php');
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
       <meta name="author" content="lilmonkeylv">
       <meta name="description" content="ChillBot admin dashboard">
       <meta name="keywords" content="chillbot">
       <link rel="stylesheet" href="../../css/tailwind.css" >
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
       <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
       <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
</head>
<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">
<div class="flex flex-col md:flex-row">
       <div class="bg-gray-800 shadow-xl h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48">
              <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                     <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
                            <li class="mr-3 flex-1">
                                   <a href="dashboard.php" class="block py-1 md:py-3 pl-1 transition duration-200 ease-in-out align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-600">
                                          <i class="fas fa-home pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Dashboard home</span>
                                   </a>
                            </li>
                            <li class="mr-3 flex-1">
                                   <a href="create.user.php" class="block py-1 md:py-3 pl-1 transition duration-200 ease-in-out align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-600">
                                          <i class="fas fa-user-friends pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-white block md:inline-block">Add a user</span>
                                   </a>
                            </li>
                            <li class="mr-3 flex-1">
                                   <a href="updates.php" class="block py-1 md:py-3 pl-1 transition duration-200 ease-in-out align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-600">
                                          <i class="fas fa-clipboard-list pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-white block md:inline-block">Updates</span>
                                   </a>
                            </li>
                     </ul>
              </div>
       </div>
       <div class="main-content flex-1 bg-gray-800 mt-12 md:mt-2 pb-24 md:pb-5">
              <div class="bg-white overflow-auto">
                     <table class="min-w-full bg-gray-800">
                            <thead class="bg-gray-800 text-white">
                                   <tr>
                                          <th class="text-left py-3 px-4 uppercase font-semibold text-sm" style="font-size: 32px;">Name</th>
                                          <th class="text-left py-3 px-4 uppercase font-semibold text-sm" style="font-size: 32px;">E-Mail</th>
                                          <th class="text-left py-3 px-4 uppercase font-semibold text-sm" style="font-size: 32px;">Added by</th>
                                   </tr>
                            </thead>
                            <tbody class="text-gray-700 text-left">
                            </div>
                            <?php
                                   $sql = 'SELECT * FROM users ORDER BY `id` DESC';
                                   $result  = $conn->query($sql);
                                   if ($result->num_rows > 0) { while ($row = $result->fetch_assoc()) { ?>
                                          <thead>
                                                 <td class="text-left py-3 px-4 text-gray-300"><?php echo $row['username'] ?> (<b><?php echo $row['id'] ?></b>)</td>
                                                 <td class="text-left py-3 px-1 text-gray-300"><?php echo $row['email'] ?></td>
                                                 <td class="text-left py-3 px-12 text-gray-300"><?php echo $row['added_by'] ?></td>
                                                 <td class="text-left py-3"><a href="../src/includes/users/delete.inc.php?updateID=<?php echo $row['id'] ?>"><i class="fas fa-trash-alt transition duration-120 ease-in-out hover:text-red-500 text-gray-300"></i></a></td>
                                          </thead>
                                   <?php }} else { ?>
                                          <tr>
                                                 <td class="w-1/3 text-left py-3 px-8 text-white" style="font-family: Comfortaa; font-size: 14px;">No users found.</td>
                                          </tr>
                                   <?php }; ?>
                            </tbody>
                     </table>
              </div>
       </div>
</div>
</body>
</html>