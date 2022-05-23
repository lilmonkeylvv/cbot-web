<?php

session_start();
$conn = include_once '../../config/database.php';

if ($_GET['updateID']) {
       $updateID = $_GET['updateID'];
       $sql = 'delete from users where id = ?';
       $stmt = $conn->prepare($sql);
       $stmt->bind_param('i', $updateID);
       $stmt->execute();

       header('Location: ../../../dashboard/users.php');
} else {
       header('Location: ../../../dashboard/users.php');
}
?>