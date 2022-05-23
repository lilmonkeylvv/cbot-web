<?php
session_start();
$conn = include_once '../../config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $username = $_POST['username'];
       $password = $_POST['password'];
       $email = $_POST['email'];
       if (doUsernameExists($username,$conn)) { 
              return header('Location: ../../../dashboard/create.user.php');
       }

       $hashedPass = password_hash($password, PASSWORD_ARGON2I);
       $addedBy = $_SESSION['user']['username'];
       $sql = 'insert into users (username,password,email,added_by) values(?,?,?,?)';
       $stmt = $conn->prepare($sql);
       $stmt->bind_param('ssss', $username, $hashedPass, $email, $addedBy);
       $stmt->execute();
       header('Location: ../../../dashboard/users.php');
} else {
       header('Location: ../../../dashboard/create.user.php');
}
function doUsernameExists($username,$conn){
       $query = sprintf("select username from users where username = '%s'",
              $conn->real_escape_string($username));
       $result = mysqli_query($conn, $query);
       if (mysqli_num_rows($result) > 0) {
              return true;
       } else {
              return false;
       }
}