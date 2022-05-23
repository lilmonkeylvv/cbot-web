<?php $conn = include_once './src/config/database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <!-- imports -->
    <script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"
    ></script>

    <link rel="shortcut icon" type="image/png" href="../images/favicon.png" />
    <link rel="stylesheet" href="../css/bootstrap-main.css" />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/now-ui-kit.css" />
    <link rel="stylesheet" href="../../css/tailwind.css" >
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,800&display=swap"
    />
    <script src="../js/now-ui-kit.min.js"></script>
    <script src="../js/global.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Updates | CBot</title>
    <link rel="shortcut icon" type="image/png" href="../../images/favicon.png" />
</head>
<style>
body {
       --tw-bg-opacity: 1;
       background-color: rgba(31, 41, 55, var(--tw-bg-opacity));
}
</style>
<body style="padding-bottom: 50px;">

<nav class="navbar navbar-expand-lg bg-transparent">
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                            <a class="nav-link" href="commands.php">Commands</a>
                     </li>
                     <li class="nav-item">
                                   <a class="nav-link" href="staff.php">Staff</a>
                     </li>
                     <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chill.lv</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="https://discord.gg/qFUZHeC">Discord</a>
                            <a class="dropdown-item" href="https://chill.lv/forums/">Forum</a>
                            <a class="dropdown-item" href="dashboard/login.php">Admin dashboard</a>
                     </li>
              </ul>
       </div>
</nav>

<!--  Updates  -->
<p class="heading text-center pb-20 pt-1" style="font-size: 42px;">Update list for the ChillBot</p>
<?php
       $sql = 'SELECT * FROM updates ORDER BY `id` DESC';
       $result  = $conn->query($sql);
       if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) { ?>
       <div class="shadow overflow-hidden text-white sm:rounded-lg m-2 p-4 bg-gray-700">
              <p class="mt-1 max-w-2xl text-sm">
                     <?php echo $row['description']; ?> 
                     <span class="pl-4 text-black">
                            ~Added by <?php echo $row['created_by'] ?>
                     </span> 
              </p>
                     <p class="mt-1 max-w-2xl text-sm text-gray-500">
              </p>
                     <p class="mt-1 max-2-2xl text-sm text-gray-500">
                     <?php echo $row['created_at']; ?>
              </p>
       </div>
<?php }} else { ?>
       <div class="shadow overflow-hidden text-white sm:rounded-lg m-2 p-4 bg-gray-700">
              <p class="mt-1 max-w-2xl text-gray-200">No updates have been made yet.</p>
       </div> <?php }; ?>
       <div class="footer absolute inset-x-0 bottom-0">
              <p class="text-white">Copyright © <a style="color: rgba(95, 115, 121, 1);" href="https://chill.lv">CHILL GAMING</a> 2021. All rights reserved.</p>
       </div>
</body>
</html>

