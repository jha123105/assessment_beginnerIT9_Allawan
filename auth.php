<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: /assessment_beginner/login.php");
    exit;
}
?>
