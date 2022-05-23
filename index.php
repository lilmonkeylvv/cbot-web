<!DOCTYPE html>
<html lang="en">
       <head>
              <meta charset="UTF-8" />
              <!-- imports -->
              <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

              <link rel="shortcut icon" type="image/png" href="../images/favicon.png" />
              <link rel="stylesheet" href="../css/bootstrap-main.css" />
              <link rel="stylesheet" href="../css/main.css" />
              <link rel="stylesheet" href="../css/now-ui-kit.css" />
              <link rel="stylesheet" href="../css/tailwind.css" >
              <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
              <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,800&display=swap"/>
              <meta name="viewport" content="width=device-width, initial-scale=1" />
              <title>Home | ChillBot</title>
       </head>
       <body class="bg-gray-800 font-sans leading-normal tracking-normal overflow-hidden">
              <nav class="navbar navbar-expand-lg bg-transparent">
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                   <li class="nav-item">
                                          <a class="nav-link" href="commands.php">Commands</a>
                                   </li>
                                   <li class="nav-item">
                                          <a class="nav-link" href="update.php">Updates</a>
                                   </li>
                                   <li class="nav-item">
                                          <a class="nav-link" href="staff.php">Staff</a>
                                   </li>
                                   <li class="nav-item dropdown">
                                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chill.lv</a>
                                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="https://discord.gg/qFUZHeC">Discord</a>
                                          <a class="dropdown-item" href="https://chill.lv/forums/">Forum</a>
                                          </div>
                                   </li>           
                            </ul>
                     </div>
              </nav>
              <img class="imageToChill" onclick="ImageToForum()" src="../images/chill-logo.png" title="Go to main homepage."/>
              <div class="heading text-center">
                     <h1 class="display-5 title">It's time to use ChillBot in your server.</h1>
                     <p class="subtitle">ChillBot is a multi-purpose bot ready to help your Discord server<br />It features moderation, tickets and much more!</p>

                     <a class="btn btn-lg transition duration-200 ease-in-out bg-gray-700 text-gray-200 md:hover:bg-gray-600" href="index.php" onclick="BotToServer()"><i class="fas fa-robot pr-3 text-gray-300"></i>Invite to server</a>
                     <a class="btn btn-lg transition duration-200 ease-in-out bg-gray-700 text-gray-200 md:hover:bg-gray-600" href="index.php" onclick="SupportServer()"><i class="fab fa-discord pr-3 text-gray-300"></i>Support server</a>
                     <br />
                     <a class="btn btn-lg transition duration-200 ease-in-out bg-gray-700 text-gray-200 md:hover:bg-gray-600" href="commands.php"><i class="fas fa-list pr-3 text-gray-300"></i>Commands</a>
                     <a class="btn btn-lg transition duration-200 ease-in-out bg-gray-700 text-gray-200 md:hover:bg-gray-600" href="update.php"><i class="fas fa-list pr-3 text-gray-300"></i>Updates</a>
              </div>

              <div class="footer absolute inset-x-0 bottom-0">
                     <p class="text-white">Copyright © <a style="color: rgba(95, 115, 121, 1);" href="https://chill.lv">CHILL GAMING</a> 2021. All rights reserved.</p>
              </div>
              <script src="../js/now-ui-kit.min.js"></script>
              <script src="../js/global.js"></script>
       </body>
</html>