<?php
session_start();
$user = $_SESSION['user'];

if ($user) {
    session_unset();
    session_destroy();
    header('Location: ../../../index.php');
}