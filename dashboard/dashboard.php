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
       <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="../../css/now-ui-kit.css" />
       <script src="../../js/now-ui-kit.min.js"></script>
       <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

<style>
       /* Buttons */
       .btn {
              border-radius: 10px !important;
              font-size: 16px !important;
              font-weight: 600 !important;
              box-shadow: inset;
              text-transform: uppercase !important;
              align: auto;
       }
       .btn:hover {
              box-shadow: 5px 5px 20px 1px rgba(0, 0, 0, 0.4);
       }
       /* Texts */
       .heading {
              padding-bottom: 5px;
              padding-top: 30px;
              padding-left: 50px;
              padding-right: 50px;
              color: #fff !important;
              background-position: bottom !important;
              background-size: 200% !important;
              background-repeat: no-repeat !important;
       }
       .title {
              line-height: 90px !important;
              margin-bottom: -2px !important;
              color: white;
              font-size: 36px !important;
       }
       .subtitle {
              color: rgba(255, 255, 255, 0.61) !important;
              font-size: 16px !important;
       }
       /* Style for the message */
       .modal {
              transition: opacity 0.5s ease;
       }
       button:focus {
              outline: 0;
       }

</style>
</head>
<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12 h-screen overflow-hidden">
<!-- Popup message -->
<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center shadow-2xl overflow-hidden">
       <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
              <div class="modal-container bg-gray-300 w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50">
                     <div class="modal-content py-4 text-left px-6">
                            <div class="flex justify-between items-center pb-3">
                            <p class="text-2xl font-bold">Are you sure?</p>
                                   <div class="modal-close cursor-pointer z-50">
                                          <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                                 <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                                          </svg>
                                   </div>
                            </div>
                            <div style="font-family: Lato;">
                                   <p>You are about to be redirected.</p>
                                   <p>You will also get signed out.</p>
                            </div>
                            <div class="flex justify-end pt-7">
                            <button class="px-4 p-3 rounded-lg mr-2 bg-green-600 hover:bg-green-500 text-white transition duration-200 ease-in-out" style="font-family: Comfortaa;"><a class="text-white hover:text-white focus:text-white" href="../src/includes/dashboard/logout.inc.php">Confirm<a></button>
                            <button class="modal-close px-4 p-3 rounded-lg bg-red-600 hover:bg-red-500 text-white transition duration-200 ease-in-out" style="font-family: Comfortaa;">Cancel</button>
                     </div>
              </div>
       </div>
</div>
<!-- Heading text -->
<p class="heading text-center" style="font-size: 52px;">Welcome to the admin dashboard!</p>
<p class="subtitle text-center" style="font-size: 42px;">Press one of the buttons below, to add users, make updates or go to the main page.<p>
       <br />
       <br />
       <br />
<!-- Buttons -->
<div class="heading text-center">
       <a class="modal-open btn btn-lg transition duration-200 ease-in-out bg-gray-700 text-gray-200 hover:bg-gray-600"><i class="fas fa-paper-plane pr-0 md:pr-3"></i>Main homepage</a>
       <br />
       <br />
       <br />
       <a href="updates.php" class="btn btn-lg transition duration-200 ease-in-out bg-gray-700 text-gray-200 hover:bg-gray-600"><i class="fas fa-clipboard-list pr-0 md:pr-3"></i>Updates</a>
       <a href="users.php" class="btn btn-lg transition duration-200 ease-in-out bg-gray-700 text-gray-200 hover:bg-gray-600"><i class="fas fa-user-friends pr-0 md:pr-3"></i>Users</a>
</div>
<!-- Script for the message -->
<script>
       var openmodal = document.querySelectorAll('.modal-open');
for (var i = 0; i < openmodal.length; i++){
       openmodal[i].addEventListener('click', function(event){
              event.preventDefault();
              toggleModal();
       });
};

const overlay = document.querySelector('.modal-overlay');
overlay.addEventListener('click', toggleModal);

var closemodal = document.querySelectorAll('.modal-close');
for (var i = 0; i < closemodal.length; i++){
       closemodal[i].addEventListener('click', toggleModal);
};

document.onkeydown = function(evt){
       evt = evt || window.event;
       var isEscape = false;
       if ("key" in evt){
              isEscape = (evt.key === "Escape" || evt.key === "Esc");
       } else {
              isEscape = (evt.keyCode === 27);
       };
       if (isEscape && document.body.classList.contains('modal-active')){
              toggleModal();
       };
};

function toggleModal () {
       const body = document.querySelector('body');
       const modal = document.querySelector('.modal');
       modal.classList.toggle('opacity-0');
       modal.classList.toggle('pointer-events-none');
       body.classList.toggle('modal-active');
};
</script>
</body>
</html>