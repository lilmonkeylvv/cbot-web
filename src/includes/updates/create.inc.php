<?php
session_start();
$conn = include_once '../../config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $updateDesc = $_POST['update-desc'];
    $date = date(" h:i A - l jS \of F Y");
    print_r($_SESSION);
    $createdBy = $_SESSION['user']['username'];
    $sql = 'insert into updates (description,created_by,created_at) values(?,?,?)';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $updateDesc, $createdBy, $date);
    $stmt->execute();

    header('Location: ../../../dashboard/updates.php');
} else {
    header('Location: ../../../dashboard/create.update.php');
}