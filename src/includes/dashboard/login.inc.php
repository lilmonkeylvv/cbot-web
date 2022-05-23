<?php
session_start();
$conn = include_once '../../config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $username = $_POST['username'];
       $password = $_POST['password'];

       $query = sprintf("select * from users where username = '%s'",
       $conn->real_escape_string($username));
       $result = mysqli_query($conn, $query);

       if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                     if (password_verify($password, $row['password']) === false){
                            return header('Location: ../../../dashboard/login.php');
                     }
                     $_SESSION['user'] = $row;
                     header('Location: ../../../dashboard/dashboard.php');
                     }
       } else {
              header('Location: ../../../dashboard/login.php');
       }
}  else {
       header('Location: ../../../dashboard/login.php');
}
